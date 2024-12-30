<?php

namespace App\Repository\client\cart;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ClientCartRepository implements ClientCartRepositoryInterface
{
    public function updateCartQuantity($itemId, $action)
    {
        $cartItem = Cart::query()->where('id', $itemId)
            ->with('product:id,stock')
            ->first();

        if (!$cartItem) {
            return "ایتم مورد نظر در سبد خرید یافت نشد.";
        }
        if ($action === 'increment') {
            if ($cartItem->quantity < $cartItem->product->stock) {
                $cartItem->increment('quantity', 1);
            } else {
                /*$this->outOfStock = true;*/
                return true;
            }
        } elseif ($action === 'decrement') {

            $cartItem->decrement('quantity', 1);
            if ($cartItem->quantity < 1) {
                $cartItem->delete();
            }
            /*$this->outOfStock =false;*/
            return false;
        }
    }

    public function getCartWithCalculations()
    {
        $cartItems = Cart::query()->where('user_id', Auth::id())
            ->with('product:id,name,price,discount,seller_id,featured,p_code,stock')
            ->get()
            ->map(function ($item) {
                $product = $item->product;

                $originalPrice = $product->price * $item->quantity;
                $discountAmount = $product->discount ? (($product->price * $product->discount) / 100) * $item->quantity : 0;
                $discountedPrice = $originalPrice - $discountAmount;

                $item->originalPrice = $originalPrice;
                $item->discountAmount = $discountAmount;
                $item->discountedPrice = $discountedPrice;

                return $item;
            });

        $invoice = [
            'totalProductCount' => $cartItems->count(),
            'totalOriginalPrice' => $cartItems->sum('originalPrice'),
            'totalDiscount' => $cartItems->sum('discountAmount'),
            'totalDiscountedPrice' => $cartItems->sum('discountedPrice'),
        ];

        // For Using In The Shipping
        Session::put('invoiceFromCart', $invoice);

        return compact('cartItems', 'invoice');
    }
}

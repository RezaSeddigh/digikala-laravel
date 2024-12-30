<?php

namespace App\Repository\client\product;

use App\Models\Cart;
use App\Models\product;
use App\Models\ProductFeatureValue;
use App\Models\ProductReviews;
use App\Models\ProductReviewVote;
use Illuminate\Support\Facades\Auth;

class ClientProductRepository implements ClientProductRepositoryInterface
{
    public function getSingleProduct($p_code)
    {
        return product::query()
            ->select('id', 'name', 'price', 'discount', 'discount_duration', 'featured', 'category_id', 'seller_id', 'p_code', 'stock')
            ->with('images', 'coverImage', 'seller','seo')
            ->where('p_code', $p_code)
            ->firstOrFail();
    }

    public function checkProductInCart($productId)
    {
        return Cart::query()
            ->where([
                'product_id' => $productId,
                'user_id' => Auth::id(),
            ])->exists();
    }

    public function addToCart($productId)
    {
        Cart::query()->create([
            'product_id' => $productId,
            'user_id' => Auth::id(),
            'quantity' => 1,
        ]);
    }

    public function getProductFeatures($productId)
    {
        return ProductFeatureValue::query()
            ->where('product_id', $productId)
            ->with(['categoryFeature', 'categoryFeatureValue'])
            ->get();
    }

    public function getProductReviews($productId)
    {
        return ProductReviews::query()
            ->where([
                'product_id' => $productId,
                'status' => 'approved',
            ])
            ->with('user')
            ->withCount([
                'votes as likeCount' => function ($query) {
                    $query->where('status', 'like');
                },
                'votes as dislikeCount' => function ($query) {
                    $query->where('status', 'dislike');
                },
            ])
            ->get();
    }

    public function submitReview($formData, $productId, $positiveItem, $negativeItem)
    {
        return ProductReviews::query()->create([
            'title' => $formData['title'],
            'comment' => $formData['comment'],
            'positive' => implode(',', $positiveItem),
            'negative' => implode(',', $negativeItem),
            'product_id' => $productId,
            'user_id' => Auth::id(),
        ]);
    }

    public function setVote($status, $reviewId)
    {
        ProductReviewVote::query()->updateOrCreate(
            [
                'product_reviews_id' => $reviewId,
                'user_id' => Auth::id(),
            ],
            [
                'status' => $status,
            ]
        );
    }
}

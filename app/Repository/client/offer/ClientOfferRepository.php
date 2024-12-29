<?php

namespace App\Repository\client\offer;

use App\Models\product;
use Illuminate\Support\Carbon;

class ClientOfferRepository implements ClientOfferRepositoryInterface
{
    public function getFeaturedProducts()
    {
        $userVisitData = Carbon::now();
        $featuredProducts = product::query()
            ->whereNotNull('discount_duration')
            ->where('discount_duration', '>', $userVisitData)
            ->where('featured', true)
            ->select('id', 'name', 'price', 'discount', 'p_code')
            ->with('coverImage','seo')
            ->get();

        return $featuredProducts->map(function ($product) {
            $discountAmount = $product->discount ? ($product->price * $product->discount / 100) : 0;
            $product->finalPrice = $product->price - $discountAmount;
            return $product;
        });
    }
}

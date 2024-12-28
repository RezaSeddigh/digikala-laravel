<?php

namespace App\Repository\admin\product;

use App\Models\product;
use App\Models\SeoItems;
use Illuminate\Support\Facades\DB;

class AdminProductRepository implements AdminProductRepositoryInterface
{
    public function submit($formData, $productId)
    {

        DB::transaction(function () use ($formData, $productId) {

            $product = $this->submitToProduct($formData, $productId);
            $this->submitToSeoItem($formData, $product->id);
        });

    }

    public function submitToProduct($formData, $productId)
    {
        return product::query()->updateOrCreate([

            'id' => $productId,
        ],
            [
                'name' => $formData['name'],
                'price' => $formData['price'],
                'discount' => $formData['discount'],
                'stock' => $formData['stock'],
                'featured' => $formData['featured'],
                'discount_duration' => $formData['discount_duration'],
                'seller_id' => $formData['sellerId'],
                'category_id' => $formData['categoryId'],
            ]
        );
    }

    public function submitToSeoItem($formData, $productId)
    {
        SeoItems::query()->updateOrCreate(
            [
                'type' => 'product',
                'ref_id' => $productId,
            ],
            [
                'slug' => $formData['slug'],
                'meta_title' => $formData['meta_title'],
                'meta_description' => $formData['meta_description'],
            ]
        );
    }
}

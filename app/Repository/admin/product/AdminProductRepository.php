<?php

namespace App\Repository\admin\product;

use App\Models\product;
use App\Models\ProductImage;
use App\Models\SeoItems;
use App\Traits\UploadFile;
use Illuminate\Support\Facades\DB;

class AdminProductRepository implements AdminProductRepositoryInterface
{
    use UploadFile;

    public function submit($formData, $productId,$photos,$coverIndex)
    {

        DB::transaction(function () use ($formData, $productId,$photos,$coverIndex) {

            $product = $this->submitToProduct($formData, $productId);
            $this->submitToSeoItem($formData, $product->id);
            $this->submitToProductImage($photos, $product->id, $coverIndex);
            $this->saveImages($photos, $product->id);
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
    public function submitToProductImage($photos, $productId, $coverIndex)
    {
        foreach ($photos as $photo) {

            $path = pathinfo($photo->hashName(), PATHINFO_FILENAME) . '.webp';

            ProductImage::query()->create(
                [
                    'path' => $path,
                    'product_id' => $productId,
                    'is_cover' => 1,
                ]
            );
        }

    }
    public function saveImages($photos, $productId)
    {
        foreach ($photos as $photo) {
            $this->uploadImageInWebpFormat($photo, $productId, 100, 100, 'small');
            $this->uploadImageInWebpFormat($photo, $productId, 300, 300, 'medium');
            $this->uploadImageInWebpFormat($photo, $productId, 800, 800, 'large');

            $photo->delete();

        }
    }
}

<?php

namespace App\Repository\admin\product;

use App\Models\product;
use App\Models\ProductFeatureValue;
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
                'p_code' => config('app.name') . '-' . $this->generateProductCode(),
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
        ProductImage::query()->where('product_id', $productId)->update(['is_cover' => false]);

        foreach ($photos as $index => $photo) {

            $path = pathinfo($photo->hashName(), PATHINFO_FILENAME) . '.webp';

            ProductImage::query()->create(
                [
                    'path' => $path,
                    'product_id' => $productId,
                    'is_cover' => $index == $coverIndex,
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
    public function generateProductCode()
    {
        do {
            $randomCode = rand(1000, 100000000);
            $checkCode = product::query()->where('p_code', $randomCode)->first();
        } while ($checkCode);

        return $randomCode;
    }
    public function submitProductFeatures($formData, $productId)
    {

        foreach ($formData as $value) {

            list($featureId, $featureValueId) = explode('_', $value);
            ProductFeatureValue::query()->updateOrCreate(
                [
                    'product_id' => $productId,
                    'category_feature_id' => $featureId,
                ],
                [
                    'category_feature_value_id' => $featureValueId,
                ]
            );


        }
    }
    public function submitProductContent($formData, $productId)
    {
        product::query()->where('id', $productId)->update([
            'short_description' => $formData['short_description'],
            'long_description' => $formData['long_description'],
        ]);
    }
    public function removeOldPhoto($productImage, $productId)
    {

        $productImage->delete();
        \Illuminate\Support\Facades\File::delete(public_path('products/' . $productId . '/small/' . $productImage->path));
        \Illuminate\Support\Facades\File::delete(public_path('products/' . $productId . '/medium/' . $productImage->path));
        \Illuminate\Support\Facades\File::delete(public_path('products/' . $productId . '/large/' . $productImage->path));

    }

    public function setCoverOldImage($photoId,$productId)
    {

        ProductImage::query()->where('product_id', $productId)->update(['is_cover' => false]);
        ProductImage::query()->where([
            'product_id' => $productId,
            'id' => $photoId,
        ])->update(['is_cover' => true]);
    }
}

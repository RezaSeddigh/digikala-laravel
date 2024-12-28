<?php

namespace App\Repository\admin\product;

interface AdminProductRepositoryInterface
{
    public function submit($formData, $productId,$photos,$coverIndex);
    public function submitToProduct($formData, $productId);
    public function submitToSeoItem($formData, $productId);
    public function submitToProductImage($photos, $productId, $coverIndex);
    public function saveImages($photos, $productId);
    public function generateProductCode();
    public function submitProductFeatures($formData, $productId);
    public function submitProductContent($formData, $productId);
}

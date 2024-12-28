<?php

namespace App\Repository\admin\product;

interface AdminProductRepositoryInterface
{
    public function submit($formData, $productId);

    public function submitToProduct($formData, $productId);

    public function submitToSeoItem($formData, $productId);
}

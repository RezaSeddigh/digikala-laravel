<?php

namespace App\Repository\admin\category;

interface AdminCategoryRepositoryInterface
{
    public function submit($formData, $categoryId);
    public function submitCategoryFeature($formData, $categoryId, $featureId);
}

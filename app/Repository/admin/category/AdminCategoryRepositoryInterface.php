<?php

namespace App\Repository\admin\category;

interface AdminCategoryRepositoryInterface
{
    public function submit($formData, $categoryId);
}

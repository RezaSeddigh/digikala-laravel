<?php

namespace App\Repository\admin\category;

use App\Models\Category;

class AdminCategoryRepository implements AdminCategoryRepositoryInterface
{
    public function submit($formData, $categoryId)
    {
        if ($formData['parentId'] == "") {
            $formData['parentId'] = null;
        }
        Category::query()->updateOrCreate(
            [
                'id' => $categoryId
            ],
            [
                'name' => $formData['name'],
                'category_id' => $formData['parentId']
            ]);
    }
}

<?php

namespace App\Repository\admin\category;

use App\Models\Category;
use App\Models\CategoryFeature;
use App\Models\CategoryFeatureValue;

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
    public function submitCategoryFeature($formData, $categoryId, $featureId)
    {
        CategoryFeature::query()->updateOrCreate([
            'id' => $featureId,
        ],
            [
                'name' => $formData['name'],
                'category_id' => $categoryId,
            ]
        );
    }
    public function submitCategoryFeatureValue($formData,$valueId,$featureId)
    {

        CategoryFeatureValue::query()->updateOrCreate([
            'id' => $valueId,
        ],
            [
                'name' => $formData['name'],
                'category_feature_id' => $featureId,
            ]
        );
    }
}

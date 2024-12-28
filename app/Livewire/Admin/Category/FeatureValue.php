<?php

namespace App\Livewire\Admin\Category;

use App\Models\CategoryFeature;
use App\Models\CategoryFeatureValue;
use App\Repository\admin\category\AdminCategoryRepositoryInterface;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class FeatureValue extends Component
{
    public $featureName;
    public $featureId;
    public $valueId;
    public $name;


    private $repository;

    public function boot(AdminCategoryRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function mount(CategoryFeature $categoryFeature)
    {
        $this->featureName = $categoryFeature->name;
        $this->featureId = $categoryFeature->id;
    }

    public function submit($formData, CategoryFeatureValue $categoryFeatureValue)
    {
        $validator = Validator::make($formData, [
            'name' => 'string|required',
        ],
            [
                'name.string' => 'فرمت اشتباه است',
                'name.required' => 'این فیلد الزامی است',
            ]
        );
        $validator->validate();
        $this->repository->submitCategoryFeatureValue($formData, $this->valueId, $this->featureId);
        $this->reset('name');
        $this->dispatch('success', 'عملیات با موفقیت انجام شد');
    }

    public function edit($valueId)
    {
        $featureValue = CategoryFeatureValue::query()->where('id', $valueId)->first();
        if ($featureValue) {
            $this->name = $featureValue->name;
            $this->featureId = $featureValue->category_feature_id;
            $this->valueId = $featureValue->id;
        }
    }

    public function delete($valueId)
    {
        CategoryFeatureValue::query()->where('id', $valueId)->delete();
        $this->dispatch('success', 'عملیات حذف با موفقیت انجام شد');
    }

    public function render()
    {
        $featureValues = CategoryFeatureValue::query()
            ->where('category_feature_id', $this->featureId)
            ->paginate(7);
        return view('livewire.admin.category.feature-value.index', [
            'featureValues' => $featureValues
        ])->layout('layouts.admin.app');
    }
}

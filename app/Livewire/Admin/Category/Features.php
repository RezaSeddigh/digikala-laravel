<?php

namespace App\Livewire\Admin\Category;

use App\Models\Category;
use App\Models\CategoryFeature;
use App\Repository\admin\category\AdminCategoryRepositoryInterface;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithPagination;

class Features extends Component
{
    use WithPagination;

    public $categoryName;
    public $categoryId;
    public $featureId;
    public $name;

    private $repository;

    public function boot(AdminCategoryRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function mount(Category $category)
    {
        $this->categoryName = $category->name;
        $this->categoryId = $category->id;
    }

    public function submit($formData, CategoryFeature $categoryFeature)
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
        $this->repository->submitCategoryFeature($formData, $this->categoryId, $this->featureId);
        $this->reset('name');
        $this->dispatch('success', 'عملیات با موفقیت انجام شد');
    }

    public function edit($categoryId)
    {
        $categoryFeatures = CategoryFeature::query()->where('id', $categoryId)->first();
        if ($categoryFeatures) {
            $this->name = $categoryFeatures->name;
            $this->featureId = $categoryFeatures->id;
            $this->categoryId = $categoryFeatures->category_id;
        }
    }

    public function delete($categoryId)
    {
        $categoryFeature = CategoryFeature::query()->where('id', $categoryId)->first();
        if ($categoryFeature->value()->exists()) {
            $this->dispatch('error', 'این ویژگی دارای مقادیر است و نمی توان آت را حذف کرد');
            return;
        }
        $categoryFeature->delete();
        $this->dispatch('success', 'عملیات حذف با موفقیت انجام شد');
    }

    public function render()
    {
        $categoryFeatures = CategoryFeature::query()->where('category_id', $this->categoryId)->paginate(7);
        return view('livewire.admin.category.features.index', [
            'categoryFeatures' => $categoryFeatures
        ])->layout('layouts.admin.app');
    }
}

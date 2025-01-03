<?php

namespace App\Livewire\Admin\Product;

use App\Models\Category;
use App\Models\CategoryFeature;
use App\Models\product;
use App\Repository\admin\product\AdminProductRepositoryInterface;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Features extends Component
{
    public $features = [];
    public $productId;

    private $repository;

    public function boot(AdminProductRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }
    public function mount(product $product)
    {

        $categoryId = $product->category_id;
        /*$category = Category::query()->find($categoryId);*/
        $this->productId = $product->id;
        $this->features = CategoryFeature::query()->where('category_id', $categoryId)->get();

    }


    public function submit($formData)
    {
        $featureIds = [];
        $featureValueIds = [];


        foreach ($formData as $value) {

            list($featureId, $featureValueId) = explode('_', $value);
            $featureIds[] = $featureId;
            $featureValueIds[] = $featureValueId;

        }
        $data = [
            'feature_ids' => $featureIds,
            'feature_value_ids' => $featureValueIds,
        ];

        $validator = Validator::make($data, [
            'feature_ids' => 'required|array',
            'feature_ids.*' => 'required|exists:category_features,id',
            'feature_value_ids' => 'required|array',
            'feature_value_ids.*' => 'required|exists:category_feature_values,id'
        ], [
            '*.required' => 'فیلد اجباری',
            '*.array' => 'نوع اطلاعات باید آرایه باشد',
            'feature_ids.*.exists' => 'وِیژگی نامعتبر است!',
            'feature_value_ids.*.exists' => 'مقادیر وِیژگی نامعتبر است!'

        ]);
        $validator->validate();
        $this->resetValidation();
        $this->repository->submitProductFeatures($formData, $this->productId);
        $this->redirect(route('admin.product.lists'));
        session()->flash('success', 'عملیات ثبت ویژگی بت موفقیت انجام شد!');


    }
    public function render()
    {
        return view('livewire.admin.product.features.index')->layout('layouts.admin.app');
    }
}

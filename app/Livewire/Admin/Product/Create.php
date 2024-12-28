<?php

namespace App\Livewire\Admin\Product;

use App\Models\Category;
use App\Models\Seller;
use App\Repository\admin\product\AdminProductRepositoryInterface;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Create extends Component
{
    public $categories = [];
    public $sellers = [];
    public $name;
    public $slug;
    public $productId;

    private $repository;

    public function boot(AdminProductRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }


    public function mount()
    {
        $this->categories = Category::all();
        $this->sellers = Seller::query()->select('id', 'shop_name')->get();
    }
    public function submit($formData)
    {
        if (isset($formData['featured'])) {
            $formData['featured'] = true;
        } else {
            $formData['featured'] = false;
        }

        if ($formData['discount_duration'] == "") {
            $formData['discount_duration'] = null;
        }

        if (!isset($formData['selleId'])) {
            $formData['sellerId'] = null;

            $validator = Validator::make($formData, [
                'name' => 'required|string',
                'slug' => 'required|string',
                'meta_title' => 'nullable|string',
                'meta_description' => 'nullable|string',
                'price' => 'required|integer',
                'discount' => 'nullable|integer',
                'stock' => 'required|integer',
                'featured' => 'nullable|boolean',
                'discount_duration' => 'nullable|string',
                'sellerId' => 'nullable|exists:sellers,id',
                'categoryId' => 'required|exists:categories,id',
            ], [

                '*.required' => 'فیلد ضروری است',
                '*.string' => 'فرمت اشتباه است ',
                '*.integer' => 'این فیلد باید از نوع عددی باشد',
                '*.min' => 'حداکثر تعداد کاراکترها : 50',
                'categoryId.exists' => 'دسته بندی نامعتبر است ',
                'sellerId.exists' => 'فروشنده نامعتبر است ',
            ]);
            $validator->validate();
            $this->resetValidation();
            $this->repository->submit($formData, $this->productId);
            session()->flash('success', 'محصول با موفقیت افزود شد!');
        }
    }


    public function render()
    {
        return view('livewire.admin.product.create.index')->layout('layouts.admin.app');
    }
}

<?php

namespace App\Livewire\Admin\Product;

use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Create extends Component
{
    public function submit($formData)
    {
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
    }

    public function render()
    {
        return view('livewire.admin.product.create.index')->layout('layouts.admin.app');
    }
}

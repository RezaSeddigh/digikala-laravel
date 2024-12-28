<?php

namespace App\Livewire\Admin\Category;

use App\Models\Category;
use App\Repository\admin\category\AdminCategoryRepositoryInterface;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $name;
    public $parentId;
    public $categoryId;
    public $categories = [];

    private $repository;

    public function boot(AdminCategoryRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function submit($formData, Category $Category)
    {
        $validator = Validator::make($formData, [
            'name' => 'string|required',
            'parentId' => 'nullable|exists:categories,id',
        ],
            [
                'name.string' => 'فرمت اشتباه است',
                'name.required' => 'این فیلد الزامی است',
                'parentId.exist' => 'دسته بندی نامعتبر است',
            ]
        );
        $validator->validate();
        $this->repository->submit($formData, $this->categoryId);
        $this->reset();
        $this->dispatch('success', 'عملیات با موفقیت انجام شد');
    }

    public function edit($category_id)
    {
        $category = Category::query()->where('id', $category_id)->first();
        if ($category) {
            $this->name = $category->name;
            $this->parentId = $category->parent_id;
            $this->categoryId = $category->id;
        }
    }

    public function delete($category_id)
    {
        $category = Category::query()->where('id', $category_id)->first();
        if ($category->children()->exists()) {
            $this->dispatch('error', 'این دسته دارای زیر شاخه است و نمی توان آت را حذف کرد');
            return;
        }
        $category->delete();
        $this->dispatch('success', 'عملیات حذف با موفقیت انجام شد');
    }

    public function mount()
    {
        $this->categories = $category = Category::all();
    }

    public function render()
    {
        $categories = Category::query()->paginate(10);
        return view('livewire.admin.category.index', [
            'allCategories' => $categories
        ])->layout('layouts.admin.app');
    }
}

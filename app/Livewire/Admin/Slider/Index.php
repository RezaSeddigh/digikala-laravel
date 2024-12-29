<?php

namespace App\Livewire\Admin\Slider;

use App\Models\Slider;
use App\Repository\admin\slider\AdminSliderRepositoryInterface;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    use WithFileUploads;


    public $image;


    private $repository;

    public function boot(AdminSliderRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function submit($formData)
    {
        if ($this->image) {
            $formData['image'] = $this->image;
        }

        $validator = Validator::make($formData, [
            'title' => 'required|string',
            'link' => 'string|url',
            'image' => 'required|image|mimes:png,jpg,webp,jpeg',
        ],
            [
                '*.required' => 'این فیلد الرامی است',
                '*.string' => 'فرمت اشتباه است',
                'image:mimes' => 'png,webp,jpg,jpeg:فرمت های مجاز تصویر',
            ]
        );
        $validator->validate();
        $this->resetValidation();

        $this->repository->submit($formData,$this->image);
        $this->dispatch('success', 'عملیات با موفقیت انجام شد');
    }

    public function delete(Slider $slider)
    {
        $this->repository->delete($slider);
        $this->dispatch('success', 'عملیات حذف با موفقیت انجام شد');

    }

    public function changeStatus(Slider $slider)
    {
        $this->repository->changeStatus($slider);
        $this->dispatch('success', 'عملیات با موفقیت انجام شد');
    }

    public function render()
    {
        $sliders = Slider::query()->paginate(5);
        return view('livewire.admin.slider.index', [
            'sliders' => $sliders
        ])->layout('layouts.admin.app');
    }
}

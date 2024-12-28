<?php

namespace App\Livewire\Admin\Delivery;

use App\Models\DeliveryMethod;
use App\Repository\admin\delivery\AdminDeliveryRepositoryInterface;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $deliveryId;
    public $name;
    public $price;

    private $repository;

    public function boot(AdminDeliveryRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function submit($formData)
    {
        $validator = Validator::make($formData, [
            'name' => 'required|string',
            'price' => 'required|integer',
        ],
            [
                'required' => 'فیلد الزامی است',
                'string' => 'فرمت اشتباه است',
                'integer' => 'این فیلد به صورت عددی است',
            ]
        );
        $validator->validate();
        $this->resetValidation();
        $this->reset('name','price');
        $this->repository->submit($formData,$this->deliveryId);
        $this->dispatch('success','عملیات با موفقیت انجام شد');
    }

    public function delete($deliveryId)
    {
        DeliveryMethod::query()->where('id',$deliveryId)->delete();
        $this->dispatch('success','عملیات حذف با موفقیت انجام شد');
    }

    public function edit($deliveryId)
    {
        $delivery = DeliveryMethod::query()->where('id',$deliveryId)->first();
        if ($deliveryId)
        {
            $this->name = $delivery->name;
            $this->price = $delivery->price;
            $this->deliveryId = $delivery->id;
        }
    }

    public function render()
    {
        $deliveries = DeliveryMethod::query()->paginate(10);
        return view('livewire.admin.delivery.index', [
            'deliveries' => $deliveries
        ])->layout('layouts.admin.app');
    }
}

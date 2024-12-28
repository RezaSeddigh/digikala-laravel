<?php

namespace App\Livewire\Admin\City;

use App\Models\City;
use App\Models\State;
use App\Repository\admin\city\AdminCityRepositoryInterface;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $name;
    public $countries = [];
    public $cityId;
    public $states = [];
    public $stateId;
    public $countryId;

    private $repository;

    public function boot(AdminCityRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function submit($formData, City $city)
    {
        $validator = Validator::make($formData, [
            'name' => 'required|string',
            'stateId' => 'required|exists:states,id',
        ],
            [
                'name.required' => 'این فیلد الزامی است',
                'name.string' => 'فرمت اشتباه است',
                'stateId.exist' => 'استان نامعتبر است',
            ]);
        $validator->validate();
        $this->repository->submit($formData, $this->cityId);
        $this->dispatch('success', 'عملیات با موفقیت انجام شد');
        $this->reset();
    }

    public function delete($city_id)
    {
        City::query()->where('id', $city_id)->delete();
        $this->dispatch('success', 'عملیات حذف با موفقیت انجام شد');
    }

    public function edit($city_id)
    {
        $city = City::query()->where('id', $city_id)->first();
        if ($city) {
            $this->name = $city->name;
            $this->cityId = $city->id;
            $this->stateId = $city->state_id;
        }
    }

    public function mount()
    {
        $this->states = State::all();
    }

    public function render()
    {
        $cities = City::query()
            ->with('state')
            ->paginate(7);
        return view('livewire.admin.city.index', [
            'cities' => $cities
        ])->layout('layouts.admin.app');
    }
}

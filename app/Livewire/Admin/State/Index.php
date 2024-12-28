<?php

namespace App\Livewire\Admin\State;

use App\Models\Country;
use App\Models\State;
use App\Repository\admin\state\AdminStateRepositoryInterface;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $name;
    public $countryId;
    public $countries =[];
    public $stateId;

    private $repository;

    public function boot(AdminStateRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }
    public function submit($formData, State $state)
    {
        $validator = Validator::make($formData, [
            'name' => 'required|string',
            'countryId' => 'required|exists:countries,id',
        ],
            [
                'name.required' => 'این فیلد الزامی است',
                'name.string' => 'فرمت اشتباه است',
                'countryId.exist' => 'کشور نامعتبر است',
            ]);
        $validator->validate();
        $this->resetValidation();
        $this->repository->submit($formData,$this->stateId);
        $this->dispatch('success', 'عملیات با موفقیت انجام شد');
        $this->reset();
    }

    public function delete($state_id)
    {
        State::query()->where('id', $state_id)->delete();
        $this->dispatch('success', 'عملیات حذف با موفقیت انجام شد');
    }

    public function edit($state_id)
    {
        $state = State::query()->where('id', $state_id)->first();
        if ($state) {
            $this->name = $state->name;
            $this->countryId = $state->country_id;
            $this->stateId = $state->id;
        }
    }
    public function mount()
    {
        $this->countries=Country::all();
    }
    public function render()
    {
        $states=State::query()
            ->with('country')
            ->paginate(10);
        return view('livewire.admin.state.index',[
            'states'=>$states
        ])->layout('layouts.admin.app');
    }
}

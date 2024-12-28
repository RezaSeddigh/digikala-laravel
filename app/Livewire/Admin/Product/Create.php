<?php

namespace App\Livewire\Admin\Product;

use Livewire\Component;

class Create extends Component
{
    public function render()
    {
        return view('livewire.admin.product.create.index')->layout('layouts.admin.app');
    }
}

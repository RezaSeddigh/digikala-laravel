<?php

namespace App\Livewire\Admin\Product;

use App\Models\product;
use Livewire\Component;

class Lists extends Component
{
    public function render()
    {
        $products = product::query()

            ->paginate(10);
        return view('livewire.admin.product.list.index', [
            'products' => $products,
        ])->layout('layouts.admin.app');
    }
}

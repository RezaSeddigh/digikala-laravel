<?php

namespace App\Livewire\Admin\Product;

use App\Models\product;
use Livewire\Component;
use Livewire\WithPagination;

class Lists extends Component
{
    use WithPagination;

    public function render()
    {
        $products = product::query()
            ->with('category','coverImage')
            ->paginate(10);
        return view('livewire.admin.product.list.index', [
            'products' => $products,
        ])->layout('layouts.admin.app');
    }
}

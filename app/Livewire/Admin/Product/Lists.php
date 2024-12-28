<?php

namespace App\Livewire\Admin\Product;

use App\Models\product;
use App\Models\ProductImage;
use App\Models\SeoItems;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithPagination;

class Lists extends Component
{
    use WithPagination;

    public function delete($productId)
    {
        DB::transaction(function () use ($productId) {
            product::query()->where('id', $productId)->delete();
            ProductImage::query()->where('product_id', $productId)->delete();
            SeoItems::query()->where('ref_id', $productId)->delete();
            File::deleteDirectory('products/' . $productId);

        });
    }

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

<?php

namespace App\Livewire\Client\Product;

use App\Repository\client\product\ClientProductRepositoryInterface;
use Artesaos\SEOTools\Traits\SEOTools;
use Livewire\Component;

class Index extends Component
{
    use SEOTools;

    public $product;

    private $repository;

    public function boot(ClientProductRepositoryInterface $repository)
    {
        return $this->repository = $repository;
    }

    public function mount($p_code)
    {

        $product = $this->repository->getSingleProduct($p_code);
        if ($product) {
            $discountAmount = $product->discount ? ($product->discount * $product->price / 100) : 0;
            $product->finalPrice = $product->price - $discountAmount;
        }
        $this->product = $product;
        $this->seoConfig($product->seo);
    }

    public function seoConfig($productSeoItems)
    {
        $this->seo()
            ->setTitle($productSeoItems->meta_title)
            ->setDescription($productSeoItems->meta_description);
    }

    public function render()
    {
        return view('livewire.client.product.index')->layout('layouts.client.app');
    }
}

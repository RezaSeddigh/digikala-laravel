<?php

namespace App\Livewire\Client\Product;

use App\Repository\client\product\ClientProductRepositoryInterface;
use Livewire\Component;

class BuyBox extends Component
{
    public $price;
    public $sellerName;
    public $discount;
    public $finalPrice;
    public $productId;
    public $incart = false;


    private $repository;

    public function boot(ClientProductRepositoryInterface $repository)
    {
        return $this->repository = $repository;
    }

    public function mount()
    {
        $this->incart = $this->repository->checkProductInCart($this->productId);
    }

    public function addToCart()
    {
        $this->repository->addToCart($this->productId);
        sleep(2);
        $this->incart = true;
        $this->dispatch('add-to-cart', productId: $this->productId);

    }

    public function render()
    {
        return view('livewire.client.product.buy-box');
    }
}

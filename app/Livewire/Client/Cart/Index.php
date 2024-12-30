<?php

namespace App\Livewire\Client\Cart;

use App\Repository\client\cart\ClientCartRepositoryInterface;
use Artesaos\SEOTools\Traits\SEOTools;
use Livewire\Component;

class Index extends Component
{
    use SEOTools;

    public $cartItems = [];
    public $invoice = [];
    public $outOfStock = false;

    private $repository;

    public function boot(ClientCartRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function mount()
    {
        $this->seoConfig();
    }

    public function seoConfig()
    {
        $this->seo()
            ->setTitle('سبد خرید شما')
            ->setDescription('هر آنچه که نیاز دارید با بهترین قیمت از دیجی‌کالا بخرید! جدیدترین انواع گوشی موبایل، لپ تاپ، لباس، لوازم آرایشی و بهداشتی، کتاب، لوازم خانگی، خودرو و... با امکان تعویض و مرجوعی آسان | ✓ارسال رايگان ✓پرداخت در محل ✓ضمانت بازگشت کالا - برای خرید کلیک کنید!');
    }

    public function updateCartQuantity($itemId, $action): void
    {
        $this->outOfStock = $this->repository->updateCartQuantity($itemId, $action);
    }

    public function render()
    {
        $data = $this->repository->getCartWithCalculations();

        $this->cartItems = $data['cartItems'];
        $this->invoice = $data['invoice'];

        return view('livewire.client.cart.index')->layout('layouts.client.app-v2');
    }
}

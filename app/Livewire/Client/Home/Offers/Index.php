<?php

namespace App\Livewire\Client\Home\Offers;

use App\Repository\client\offer\ClientOfferRepository;
use App\Repository\client\offer\ClientOfferRepositoryInterface;
use Livewire\Component;

class Index extends Component
{
    public $featuredProducts = [];

    private $repository;
    public function boot(ClientOfferRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function mount()
    {
        $this->featuredProducts = $this->repository->getFeaturedProducts();

    }

    public function placeholder()
    {
        return view('layouts.client.placeholders.first-page.offers-skeleton');
    }
    public function render()
    {
        return view('livewire.client.home.offers.index');
    }
}

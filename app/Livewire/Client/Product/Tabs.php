<?php

namespace App\Livewire\Client\Product;

use App\Models\product;
use App\Repository\client\product\ClientProductRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Tabs extends Component
{
    public $productId;
    public $sellerName;
    public $name;
    public $shortDescription;
    public $longDescription;
    public $activeTab = 0;
    public $productFeatures = [];
    public $productReviews = [];
    public $title;
    public $comment;

    public $positiveInput = '';
    public $positiveItem = [];

    public $negativeInput = '';
    public $negativeItem = [];

    public $submitSuccessAlert = false;

    private $repository;

    public function boot(ClientProductRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function mount()
    {
        app()->setLocale('fa');
        $this->changeTab(1);
    }

    public function changeTab($tabNumber)
    {
        $this->activeTab = $tabNumber;
        $product = product::query()->where('id', $this->productId);
        if ($tabNumber == 1) {
            $this->shortDescription = $product->pluck('short_description')->first();
        } elseif ($tabNumber == 2) {
            $this->longDescription = $product->pluck('long_description')->first();
        } elseif ($tabNumber == 3) {
            $this->getProductFeatures($this->productId);
        } elseif ($tabNumber == 4) {
            $this->getProductReviews($this->productId);
        }
    }

    public function getProductFeatures($productId)
    {
        $this->productFeatures = $this->repository->getProductFeatures($productId);
    }

    public function getProductReviews($productId)
    {
        $this->productReviews = $this->repository->getProductReviews($productId);
    }


    public function addPositiveItem()
    {
        $this->validate([
            'positiveInput' => 'required|min:3,max:50'
        ],
            [
                'positiveInput.required' => 'این فیلد الزامی است',
                'positiveInput.min' => 'حداقل باید 3 کاراکتر باشد',
                'positiveInput.max' => 'حداکثر باید 50 کاراکتر باشد',
            ]);

        $this->positiveItem[] = $this->positiveInput;
        $this->positiveInput = '';


    }


    public function addNegativeItem()
    {
        $this->validate([
            'negativeInput' => 'required|min:3,max:50'
        ],
            [
                'negativeInput.required' => 'این فیلد الزامی است',
                'negativeInput.min' => 'حداقل باید 3 کاراکتر باشد',
                'negativeInput.max' => 'حداکثر باید 50 کاراکتر باشد',
            ]);

        $this->negativeItem[] = $this->negativeInput;
        $this->negativeInput = '';


    }

    public function submitReview($formData)
    {
        $validator = Validator::make([
            'title' => 'required|string|min:5|max:100',
            'comment' => 'required|string|min:5|max:250',
        ],
            [
                '*.required' => 'این فیلد الزامی است',
                '*.string' => 'فرمت اشتباه است',
                '*.max' => 'حداکثر تعداد کاراکترها:250',
                '*.min' => 'حداقل باید 5 کاراکتر باشد',
            ]);
        $validator->validate();
        $this->resetValidation();
        $this->repository->submitReview($formData, $this->productId, $this->positiveItem, $this->negativeItem);
        $this->submitSuccessAlert = true;
        $this->reset('title', 'comment', 'positiveInput', 'negativeInput');
        $this->positiveItem = [];
        $this->negativeItem = [];
    }

    public function removeNegativeItem($index)
    {
        array_splice($this->negativeItem, $index, 1);

    }

    public function removePositiveItem($index)
    {
        array_splice($this->positiveItem, $index, 1);

    }

    public function setVote($status, $reviewId)
    {
        if (Auth::check()) {
            sleep(1);
            $this->repository->setVote($status, $reviewId);
            $this->getProductReviews($this->productId);
        } else {
            return $this->redirect()->route('client.auth.index');
        }

    }

    public function render()
    {
        return view('livewire.client.product.tabs');
    }
}

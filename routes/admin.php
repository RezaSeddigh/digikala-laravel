<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Admin\Dashboard\Index as dashboardIndex;
use App\Livewire\Admin\Country\Index as countryIndex;
use App\Livewire\Admin\State\Index as stateIndex;
use App\Livewire\Admin\City\Index as cityIndex;
use App\Livewire\Admin\Category\Index as categoryIndex;
use App\Livewire\Admin\Category\Features as featuresIndex;
use App\Livewire\Admin\Category\FeatureValue as FeatureValueIndex;
use App\Livewire\Admin\Product\Create as createProductIndex;
use App\Livewire\Admin\Product\Lists as listProductIndex;
use App\Livewire\Admin\Product\Features as featureProductIndex;
use App\Livewire\Admin\Product\Content as productContentIndex;
use App\Livewire\Admin\Product\CkUpload;
use App\Livewire\Admin\Delivery\Index as deliveryIndex;


Route::name('admin.')->group(function () {

    Route::get('/dashboard',dashboardIndex::class)->name('dashboard');
    Route::get('/country',countryIndex::class)->name('country');
    Route::get('/state',stateIndex::class)->name('state');
    Route::get('/city',cityIndex::class)->name('city');
    Route::get('/category',categoryIndex::class)->name('category');
    Route::get('/category/features/{category}',featuresIndex::class)->name('category.features');
    Route::get('/category/features/{categoryFeature}/values/',FeatureValueIndex::class)->name('category.features.values');
    Route::get('/product/create',createProductIndex::class)->name('product.create');
    Route::get('/product/lists',listProductIndex::class)->name('product.lists');
    Route::get('/product/features/{product}', featureProductIndex::class)->name('product.features');
    Route::get('/product/content/{product}', productContentIndex::class)->name('product.content');
    Route::post('/ck-upload/{productId}', [CkUpload::class, 'upload'])->name('ck-upload');

    Route::get('/delivery',deliveryIndex::class)->name('delivery');

});

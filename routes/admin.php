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


Route::name('admin.')->group(function () {

    Route::get('/dashboard',dashboardIndex::class)->name('dashboard');
    Route::get('/country',countryIndex::class)->name('country');
    Route::get('/state',stateIndex::class)->name('state');
    Route::get('/city',cityIndex::class)->name('city');
    Route::get('/category',categoryIndex::class)->name('category');
    Route::get('/category/features/{category}',featuresIndex::class)->name('category.features');
    Route::get('/category/features/{categoryFeature}/values/',FeatureValueIndex::class)->name('category.features.values');
    Route::get('/product/create',createProductIndex::class)->name('product.create');

});

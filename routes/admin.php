<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Admin\Dashboard\Index as dashboardIndex;
use App\Livewire\Admin\Country\Index as countryIndex;
use App\Livewire\Admin\State\Index as stateIndex;
use App\Livewire\Admin\City\Index as cityIndex;
use App\Livewire\Admin\Category\Index as categoryIndex;


Route::name('admin.')->group(function () {

    Route::get('/dashboard',dashboardIndex::class)->name('dashboard');
    Route::get('/country',countryIndex::class)->name('country');
    Route::get('/state',stateIndex::class)->name('state');
    Route::get('/city',cityIndex::class)->name('city');
    Route::get('/category',categoryIndex::class)->name('category');

});

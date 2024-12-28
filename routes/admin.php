<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Admin\Dashboard\Index as dashboardIndex;
use App\Livewire\Admin\Country\Index as countryIndex;


Route::name('admin.')->group(function () {

    Route::get('/dashboard',dashboardIndex::class)->name('dashboard');
    Route::get('/country',countryIndex::class)->name('country');

});

<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Admin\Dashboard\Index as dashboardIndex;


Route::name('admin.')->group(function () {

    Route::get('/dashboard',dashboardIndex::class)->name('dashboard');

});

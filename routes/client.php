<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Client\Auth\Index as AuthIndex;

Route::name('client.')->group(function () {

    Route::get('/auth', AuthIndex::class)->name('auth');

});

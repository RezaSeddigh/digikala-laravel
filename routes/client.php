<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Client\Auth\Index as AuthIndex;
use App\Livewire\Client\Home\Index as HomeIndex;
use App\Livewire\Client\Home\Offers\Index as OfferIndex;

Route::name('client.')->group(function () {

    Route::get('/auth', AuthIndex::class)->name('auth');
    Route::get('/gmail', [AuthIndex::class, 'redirectToProvider'])->name('gmail');
    Route::get('/auth/gmail/callback', [AuthIndex::class, 'handleProviderCallback'])->name('gmail.callback');

    Route::get('/', HomeIndex::class)->name('home');
    Route::get('/product/{p_code}/{slug?}', OfferIndex::class)->name('product');

});

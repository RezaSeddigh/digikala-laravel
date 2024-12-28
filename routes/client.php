<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Client\Auth\Index as AuthIndex;

Route::name('client.')->group(function () {

    Route::get('/auth', AuthIndex::class)->name('auth');
    Route::get('/gmail', [AuthIndex::class,'redirectToProvider'])->name('gmail');
    Route::get('/auth/gmail/callback', [AuthIndex::class,'handleProviderCallback'])->name('gmail.callback');

});

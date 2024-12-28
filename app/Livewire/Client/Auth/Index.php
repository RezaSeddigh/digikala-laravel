<?php

namespace App\Livewire\Client\Auth;

use Laravel\Socialite\Facades\Socialite;
use Livewire\Component;

class Index extends Component
{
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallback()
    {
        $gmailUser = Socialite::driver('google')->stateless()->user();
        dd($gmailUser);
    }

    public function render()
    {
        return view('livewire.client.auth.index')->layout('layouts.client.app');
    }
}

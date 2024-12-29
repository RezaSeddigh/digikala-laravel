<?php

namespace App\Livewire\Client\Auth;

use App\Repository\client\auth\ClientAuthRepository;
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
        $repository = new ClientAuthRepository();

        $gmailUser = Socialite::driver('google')->stateless()->user();

        $repository->checkUser($gmailUser);

        return redirect()->route('home');
    }

    public function render()
    {
        return view('livewire.client.auth.index')->layout('layouts.client.app');
    }
}

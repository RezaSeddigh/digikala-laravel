<?php

namespace App\Livewire\Client\Auth;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.client.auth.index')->layout('layouts.client.app');
    }
}

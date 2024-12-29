<?php

namespace App\Livewire\Client\Home;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.client.home.index')->layout('layouts.client.app');
    }
}

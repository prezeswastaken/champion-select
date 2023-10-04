<?php

namespace App\Livewire;

use Livewire\Component;

class Main extends Component
{
    public $questionString = "What auto-attack range do you prefer?";

    public function render()
    {
        return view('livewire.main');
    }
}

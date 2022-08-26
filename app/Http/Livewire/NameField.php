<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NameField extends Component
{
    public $name;

    public function render()
    {
        return view('livewire.name-field');
    }
}

<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EmailField extends Component
{

    public $email;
    
    public function render()
    {
        return view('livewire.email-field');
    }
}

<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PasswordField extends Component
{

    public $password;
    
    public function render()
    {
        return view('livewire.password-field');
    }
}

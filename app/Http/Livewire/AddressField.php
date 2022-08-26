<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AddressField extends Component
{

    public $address;
    
    public function render()
    {
        return view('livewire.address-field');
    }
}

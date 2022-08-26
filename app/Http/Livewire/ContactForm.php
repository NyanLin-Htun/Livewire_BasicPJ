<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $password;
    public $address;
    public $contact = [];

    public function submitForm()
    {
        $contact['name'] = $this->name;
        $contact['email'] = $this->email;
        $contact['password'] = $this->password;
        $contact['address'] = $this->address;

        dd($contact);
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}

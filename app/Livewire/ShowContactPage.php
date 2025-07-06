<?php

namespace App\Livewire;

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ShowContactPage extends Component
{

    public $name = '';
    public $email = '';
    public $message = '';

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required',
    ];

    public function submit()
    {
        $this->validate();

        $mailData = [
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,
        ];

        // Mail::to('admin@example.com')->send(new ContactMail($mailData));

        session()->flash('success', 'Your message has been sent successfully.');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.show-contact-page');
    }
}
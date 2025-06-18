<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Service;

class ShowService extends Component
{
    public $service;

    public function mount(Service $service)
    {
        $this->service = $service;
    }

    public function render()
    {
        return view('livewire.show-service', [
            'service' => $this->service
        ]);
    }
}
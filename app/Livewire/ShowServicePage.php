<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\Service;

class ShowServicePage extends Component
{
    public function render()
    {
        $services = Service::where('state', 1)
            ->orderBy('id', 'asc')
            ->get();
        return view('livewire.show-service-page', [
            'services' => $services,
        ]);
    }
}
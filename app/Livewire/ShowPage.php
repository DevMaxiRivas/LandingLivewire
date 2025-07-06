<?php

namespace App\Livewire;

use App\Models\Page;
use Livewire\Component;

class ShowPage extends Component
{
    public Page $page;
    public function render()
    {
        return view('livewire.show-page');
    }
}
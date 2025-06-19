<?php

namespace App\Livewire;

use App\Models\Member;
use Livewire\Component;

class ShowTeamPage extends Component
{
    public function render()
    {
        $team = Member::get();
        return view('livewire.show-team-page', [
            'team' => $team,
        ]);
    }
}
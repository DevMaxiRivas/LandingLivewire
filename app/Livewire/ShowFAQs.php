<?php

namespace App\Livewire;

use App\Enums\StatusFAQEnum;
use App\Models\Faq;
use Livewire\Component;

class ShowFAQs extends Component
{
    public function render()
    {
        $faqs = Faq::where('status', StatusFAQEnum::ACTIVE)
            ->orderBy('created_at', 'desc')->limit(10)->get();
        return view('livewire.show-f-a-qs', [
            'faqs' => $faqs,
        ]);
    }
}
<?php

namespace App\Livewire;

use Livewire\Component;

class ShowBlog extends Component
{
    public function render()
    {
        // $blogs = Article::orderBy('created_at', 'desc')
        //     ->with(['category', 'user'])
        //     ->paginate(10);

        return view('livewire.show-blog');
    }
}
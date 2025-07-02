<?php

namespace App\Livewire;

use App\Models\Article;
use App\Models\Category;
use Livewire\Component;

class ShowBlog extends Component
{
    public function render()
    {
        $blogs = Article::orderBy('created_at', 'desc')->get();
        $categories = Category::where('status', 1)->get();

        return view('livewire.show-blog', compact('blogs', 'categories'));
    }
}
<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class BlogDetail extends Component
{
    public Article $article;

    public function render()
    {
        // $article = Article::findOrFail($this->article);
        return view('livewire.blog-detail', [
            'article' => $this->article,
        ]);
    }
}

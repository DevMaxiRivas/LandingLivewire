<?php

namespace App\Livewire;

use App\Models\Article;
use App\Models\Category;
use App\Enums\StatusArticleEnum;
use Livewire\Attributes\Url;
use Livewire\Component;

class ShowBlog extends Component
{
    #[Url]
    public $categorySlug = null;
    protected $paginate = 10;

    public function render()
    {
        $categories = Category::where('status', 1)->get();
        $query_articles = Article::orderBy('created_at', 'desc')->where('status', StatusArticleEnum::PUBLICADO);

        if (!empty($this->categorySlug)) {
            $category = Category::where('slug', $this->categorySlug)->first();

            if (empty($category)) abort(404, 'Category not found');

            $query_articles = $query_articles->where('category_id', $category->id);
        }

        $articles = $query_articles->paginate($this->paginate);
        $last_articles = $query_articles->take(3)->get();

        return view('livewire.show-blog', compact('articles', 'categories', 'last_articles'));
    }
}
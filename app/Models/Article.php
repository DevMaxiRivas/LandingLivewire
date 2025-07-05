<?php

namespace App\Models;

use App\Enums\StatusArticleEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;
    protected $table = 'articles';

    protected $fillable = [
        'title',
        'category_id',
        'author',
        'content',
        'image',
        'slug',
        'status',
    ];

    protected $casts = [
        'status' => StatusArticleEnum::class,
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

<?php

namespace App\Models;

use App\Enums\PageStateEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'content',
        'state',
    ];

    protected $casts = [
        'state' => PageStateEnum::class,
    ];
}
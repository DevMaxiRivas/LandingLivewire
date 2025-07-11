<?php

namespace App\Models;

use App\Enums\StatusServiceEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'icon_class',
        'short_desc',
        'description',
        'state',
    ];

    protected $cast = [
        'state' => StatusServiceEnum::class,
    ];
}
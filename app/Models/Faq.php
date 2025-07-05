<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Enums\Enums\EnumStatusFAQs;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Faq extends Model
{
    use HasFactory;
    protected $table = 'faqs';

    protected $fillable = [
        'question',
        'answer',
        'status',
    ];

    protected $casts = [
        'status' => EnumStatusFAQs::class,
    ];

    public function getRouteKeyName()
    {
        return 'question';
    }
}

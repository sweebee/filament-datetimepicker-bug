<?php

namespace App\Models;

use Cube\LaravelTranslatableJson\HasJsonTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    use HasJsonTranslations;

    public $translatable = ['title'];

    protected $guarded = ['id'];

    public $translatableJson = [
        'content' => [
            'title',
            'description',
        ]
    ];

    protected $casts = [
        'title' => 'array',
        'content' => 'array',
    ];
}

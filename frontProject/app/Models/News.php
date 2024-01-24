<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';

    protected $fillable = [
        'news_type',
        'news_image',
        'news_title',
        'news_title_en',
        'news_description',
        'news_description_en',
        'news_delete_status',
        'news_datetime',
    ];
}

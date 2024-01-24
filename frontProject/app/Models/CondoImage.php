<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CondoImage extends Model
{
    use HasFactory;

    protected $table = 'condo_image';

    protected $fillable = [
        'condo_id',
        'image_name',
    ];

}

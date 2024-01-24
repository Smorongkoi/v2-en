<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    use HasFactory;

    protected $table = 'university';

    protected $primaryKey = 'university_id';

    protected $fillable = [
        'university_name',
        'university_name_en',
        'latitude',
        'longtitude',
    ];

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UniversityCondo extends Model
{
    use HasFactory;

    protected $table = 'university_condo';

    protected $fillable = [
        'condo_id',
        'university_station_id',
        'distance',
    ];
}

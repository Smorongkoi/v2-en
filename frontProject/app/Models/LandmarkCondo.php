<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandmarkCondo extends Model
{
    use HasFactory;

    protected $table = 'landmark_condo';

    protected $fillable = [
        'condo_id',
        'landmark_id',
        'distance',
    ];
    
}

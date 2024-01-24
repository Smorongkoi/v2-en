<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandmarkType extends Model
{
    use HasFactory;

    protected $table = 'landmark_type';

    protected $primaryKey = 'landmark_type_id';

    protected $fillable = [
        'landmark_type_name',
        'landmark_type_name_en',
        'active_status',
    ];

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Landmark extends Model
{
    use HasFactory;

    protected $table = 'landmark';

    protected $primaryKey = 'landmark_id';

    protected $fillable = [
        'landmark_type_id',
        'landmark_name',
        'landmark_name_en',
        'latitude',
        'longtitude',
        'active_status',
    ];

}

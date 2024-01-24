<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    protected $table = 'area';

    protected $primaryKey = 'area_id';

    protected $fillable = [
        'zone_id',
        'area_name',
        'area_name_en',
        'active_status',
    ];

}

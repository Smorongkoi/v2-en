<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainStation extends Model
{
    use HasFactory;

    protected $table = 'train_station';

    protected $primaryKey = 'train_station_id';

    protected $fillable = [
        'train_station_name',
        'train_station_name_en',
        'latitude',
        'longtitude',
    ];

}

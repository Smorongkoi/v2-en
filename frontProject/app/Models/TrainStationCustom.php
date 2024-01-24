<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainStationCustom extends Model
{
    use HasFactory;
    
    protected $connection = 'mysql_2';

    protected $table = 'train_station_custom';

    protected $primaryKey = 'train_station_id';

    protected $fillable = [
        'train_station_url',
        'train_station_url_en',
        'list_order',
        'active_status',
    ];
}

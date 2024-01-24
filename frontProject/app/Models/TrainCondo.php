<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainCondo extends Model
{
    use HasFactory;

    protected $table = 'train_condo';

    protected $fillable = [
        'condo_id',
        'train_station_id',
        'distance',
    ];

}

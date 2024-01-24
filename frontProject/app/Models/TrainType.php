<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainType extends Model
{
    use HasFactory;

    protected $table = 'train_type';

    protected $primaryKey = 'train_type_id';

    protected $fillable = [
        'train_type_icon',
        'train_type_sub',
        'train_type_name',
        'train_type_name_en',
        'train_type_color',
    ];

}

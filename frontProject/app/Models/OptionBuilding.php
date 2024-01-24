<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OptionBuilding extends Model
{
    use HasFactory;
    protected $table = 'option_building';

    protected $fillable = [
        'building_name',
        'building_name_en',
        'list_order',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OptionBed extends Model
{
    use HasFactory;
    protected $table = 'option_bed';

    protected $fillable = [
        'bed_name',
        'bed_name_en',
        'list_order',
    ];
}

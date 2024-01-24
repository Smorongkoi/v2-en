<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OptionBath extends Model
{
    use HasFactory;

    protected $table = 'option_bath';

    protected $fillable = [
        'bath_name',
        'bath_name_en',
        'list_order',
    ];

}

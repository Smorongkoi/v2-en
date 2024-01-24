<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OptionPhase extends Model
{
    use HasFactory;
    protected $table = 'option_phase';

    protected $fillable = [
        'phase_name',
        'phase_name_en',
        'list_order',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amphoe extends Model
{
    use HasFactory;

    protected $table = 'amphoe';

    protected $primaryKey = 'amphoe_id';

    protected $fillable = [
        'province_id',
        'amphoe_name_th',
        'amphoe_name_en',
    ];
}

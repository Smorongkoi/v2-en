<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    protected $table = 'district';

    protected $primaryKey = 'district_id';

    protected $fillable = [
        'amphoe_id',
        'district_name_th',
        'district_name_en',
        'zipcode',
    ];
    
}

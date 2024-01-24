<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZoneCustom extends Model
{
    use HasFactory;

    protected $connection = 'mysql_2';

    protected $table = 'zone_custom';

    protected $primaryKey = 'zone_id';

    protected $fillable = [
        'zone_url',
        'zone_url_en',
        'list_order',
        'active_status',
    ];

}

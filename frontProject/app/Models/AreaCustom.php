<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AreaCustom extends Model
{
    use HasFactory;

    protected $connection = 'mysql_2';

    protected $table = 'area_custom';

    protected $primaryKey = 'area_id';

    protected $fillable = [
        'area_line_link',
        'area_url',
        'area_url_en',
        'list_order',
        'active_status',
    ];

}

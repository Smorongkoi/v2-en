<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Want extends Model
{
    use HasFactory;
    protected $connection = 'mysql_2';

    protected $table = 'want';

    protected $fillable = [
        'condo_name',
        'want_type',
        'want_bed',
        'want_area_total',
        'want_time_period',
        'want_time_stay',
        'want_reason',
        'want_price',
        'want_description',
        'want_customer_name',
        'want_customer_phone',
        'want_customer_line',
        'want_customer_email',
        'want_operate_status',
        'want_operate_user_id',
        'want_operate_remark',
        'want_operate_datetime',
        'want_delete_status',
    ];
}

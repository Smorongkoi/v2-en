<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    use HasFactory;

    protected $connection = 'mysql_2';

    protected $table = 'deposit';

    protected $fillable = [
        'condo_name',
        'deposit_type',
        'deposit_bed',
        'deposit_baths',
        'deposit_building',
        'deposit_phase',
        'deposit_sale_type',
        'deposit_sale_hold',
        'deposit_area_total',
        'deposit_floor',
        'deposit_residents',
        'deposit_rent_price',
        'deposit_sale_price',
        'deposit_header',
        'deposit_description',
        'deposit_image_title',
        'deposit_customer_name',
        'deposit_customer_phone',
        'deposit_customer_line',
        'deposit_customer_email',
        'deposit_owner_type',
        'deposit_operate_status',
        'deposit_operate_user_id',
        'deposit_operate_remark',
        'deposit_operate_datetime',
        'deposit_delete_status',
        'post_id',
    ];
}

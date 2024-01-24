<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'post';

    protected $fillable = [
        'condo_id',
        'post_no',
        'post_type',
        'post_bed',
        'post_baths',
        'post_building',
        'post_phase',
        'post_sale_type',
        'post_sale_hold',
        'post_area_total',
        'post_floor',
        'post_residents',
        'post_rent_price',
        'post_sale_price',
        'post_header',
        'post_description',
        'post_header_en',
        'post_description_en',
        'post_image_title',
        'post_accept_agency',
        'post_customer_name',
        'post_customer_phone',
        'post_customer_line',
        'post_customer_email',
        'post_remark',
        'user_id',
        'post_datetime',
        'post_accept_shock',
        'post_accept_beautiful',
        'post_accept_view',
        'post_accept_pin',
        'post_status_rent',
        'post_status_sale',
        'post_expire',
        'post_contract_expire',
        'post_contract_customer',
        'post_delete_datetime',
        'post_delete_user_id',
        'post_delete_remark',
        'last_update',
        'post_vdo',
        'post_vdo_datetime',
        'post_youtube',
        'action_user_id',
        'action_datetime',
        'post_close'
    ];
}

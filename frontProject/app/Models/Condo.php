<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Condo extends Model
{
    use HasFactory;

    protected $table = 'condo';

    protected $primaryKey = 'condo_id';

    protected $fillable = [
        'area_id',
        'condo_code',
        'condo_name_th',
        'condo_name_en',
        'condo_image_tltle',
        'condo_image_tltle_alt',
        'condo_image_banner',
        'condo_image_banner_alt',
        'condo_project_owner_th',
        'condo_project_owner_en',
        'condo_build_th',
        'condo_build_en',
        'condo_finish_th',
        'condo_finish_en',
        'condo_total_area_th',
        'condo_total_area_en',
        'condo_rise_style',
        'condo_total_room',
        'condo_address_th',
        'condo_address_en',
        'condo_district_id',
        'condo_latitude',
        'condo_longtitude',
        'condo_total_buildings_th',
        'condo_total_buildings_en',
        'condo_total_floor_th',
        'condo_total_floor_en',
        'condo_total_style_th',
        'condo_total_style_en',
        'condo_total_parking_th',
        'condo_total_parking_en',
        'condo_total_lift_th',
        'condo_total_lift_en',
        'condo_pubild_transport_th',
        'condo_pubild_transport_en',
        'condo_bus_passing_th',
        'condo_bus_passing_en',
        'condo_sale_price_th',
        'condo_sale_price_en',
        'condo_sale_avergage_price_th',
        'condo_sale_avergage_price_en',
        'condo_facilities_th',
        'condo_facilities_en',
        'condo_notable_th',
        'condo_notable_en',
        'condo_common_fee_th',
        'condo_common_fee_en',
        'condo_remark_th',
        'condo_remark_en',
        'condo_google_map_link',
        'condo_1bed_price_rent'
    ];
}

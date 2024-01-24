<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CondoCustom extends Model
{
    use HasFactory;

    protected $connection = 'mysql_2';

    protected $table = 'condo_custom';

    protected $primaryKey = 'condo_id';

    protected $fillable = [
        'condo_url_th',
        'condo_url_en',
        'condo_remark_internal',
        'active_status',
        'condo_interesting',
        'condo_focus',
        'condo_score',
        'condo_target',
        'condo_website_1',
        'condo_google_page_1',
        'condo_ads_1',
        'condo_website_2',
        'condo_google_page_2',
        'condo_ads_2',
        'condo_website_3',
        'condo_google_page_3',
        'condo_ads_3',
        'propertyhub_post',
        'livinginsider_post',
        'condo_marketing_keyword',
        'condo_marketing_fb_page',
        'condo_marketing_fb_group',
    ];
}

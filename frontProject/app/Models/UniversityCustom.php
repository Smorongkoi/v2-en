<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UniversityCustom extends Model
{
    use HasFactory;
    
    protected $connection = 'mysql_2';

    protected $table = 'university_custom';

    protected $primaryKey = 'university_id';

    protected $fillable = [
        'university_url',
        'university_url_en',
        'list_order',
        'active_status',
    ];

}

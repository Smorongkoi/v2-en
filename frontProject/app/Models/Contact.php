<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $connection = 'mysql_2';

    protected $table = 'contact';

    protected $fillable = [
        'contact_name',
        'contact_phone',
        'contact_email',
        'contact_subject',
        'contact_description',
        'contact_datetime',
        'contact_operate_status',
        'contact_operate_user_id',
        'contact_operate_remark',
        'contact_operate_datetime',
        'contact_delete_status',
    ];

}

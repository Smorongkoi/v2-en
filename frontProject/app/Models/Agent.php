<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;

    protected $connection = 'mysql_2';

    protected $table = 'agent';

    protected $fillable = [
        'agent_name',
        'agent_phone',
        'agent_birthday',
        'agent_line',
        'agent_email',
        'agent_skill',
        'agent_type',
        'agent_want_post',
        'agent_want_theme',
        'agent_want_co',
        'agent_operate_status',
        'agent_operate_user_id',
        'agent_operate_remark',
        'agent_operate_datetime',
        'agent_delete_status',
    ];

}

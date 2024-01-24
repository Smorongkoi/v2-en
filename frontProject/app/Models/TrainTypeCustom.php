<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainTypeCustom extends Model
{
    use HasFactory;

    protected $connection = 'mysql_2';

    protected $table = 'train_type_custom';

    protected $primaryKey = 'train_type_id';

    protected $fillable = [
        'list_order',
        'active_status',
    ];
}

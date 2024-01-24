<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepositImage extends Model
{
    use HasFactory;

    protected $connection = 'mysql_2';

    protected $table = 'deposit_image';

    protected $fillable = [
        'deposit_id',
        'image_name',
    ];
}

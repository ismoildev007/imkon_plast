<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'color',
        'size_height',
        'size_weight',
        'shirt',
        'type',
        'phone_number',
        'status',
    ];
}

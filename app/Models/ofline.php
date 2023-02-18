<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ofline extends Model
{
    public $table = 'oflines';

    use HasFactory;

    public $fillable = [

        'order_date',
        'order_id',
        'customer_name',
        'customer_location',
        'customer_local',
        'phone_number',
        'income',
        'delevery_fees',
        'status',
        'captain_name',
		'product_type',
        'payment',
        'merchant',
        'note',

    ];
}

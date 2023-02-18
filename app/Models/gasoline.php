<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gasoline extends Model
{
    use HasFactory;
    public $table = 'gasolines';
    
    public $fillable = [
        
        'plate_number',
        'amount',
        'counter_number'

    ];
}

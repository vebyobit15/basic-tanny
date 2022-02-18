<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable =[
        'service_image',
        'service_cartype',
        'service_carnumber',
        'service_carbrand',
        'service_carcolor',
        'customer_number',
        'customer_name',
        'customer_telnumber',
        'service_price'
    ];
}

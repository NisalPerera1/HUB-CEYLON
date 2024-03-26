<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clothes extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_name',
        'gender',
        'goods_or_services',
        'unit_of_measure',
        'color',
        'size',
        'age_limits',
        'return_exchange_policy',
        'tailor_made',
        'product_description',
        'product_specifications',
        'whole_sale_supply',
        'no_of_units_available',
        'images', 

    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;
    protected $fillable = [
        'buyer_id',
        'product_id',
        'price',
        'postcode',
        'address',
        'building',
    ];

    const UPDATED_AT = null;
}

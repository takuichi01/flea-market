<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'product_image',
        'brand',
        'price',
        'description',
        'category',
        'condition',
    ];

    public function getCategoryListAttribute()
    {
        if (empty($this->category)) return [];
        return array_map('trim', explode(',', $this->category));
    }
}

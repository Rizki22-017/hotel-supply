<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'product_category_id',
        'product_color',
        'product_material',
        'product_description',
        'product_size_chart',
        'product_image',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'product_category_id');
    }
}

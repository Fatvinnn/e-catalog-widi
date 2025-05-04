<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'price',
        'description',
        'image',
        'variants', // JSON array of color, storage, and stock combinations
        'featured_image',
        'additional_image',
        'tokopedia_link',
        'shopee_link',
        'category_id',

    ];

    protected $casts = [
        'variants' => 'array',
        'additional_image' => 'array',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($product) {
            if (empty($product->sku)) {
                $product->sku = 'SKU-' . strtoupper(uniqid());
            }
        });
    }

    // public function category()
    // {
    //     return $this->belongsTo(Category::class);
    // }
    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $casts = [
        'categories_ids' => 'json',
        'sub_categories_ids' => 'json',
    ];

    protected $fillable =[
        'name',
        'status',
        'is_featured',
        'sku',
        'qty',
        'stock_status',
        'weight',
        'price',
        'special_price',
        'special_price_from',
        'special_price_to',
        'parent_category',
        'child_category',
        'short_description',
        'description',
        'url_key',
        'related_product',
        'product_image',
        'second_image'
    ];

    public static function boot() {
  
        parent::boot();

        static::created(function ($product) {

            $product->url_key = $product->url_key.'-'.$product->id;
            $product->save();
            
        });
    }

    public function orders() {
        return $this->hasMany(Order::class, 'product_id');
    }

    public function category() {
        return $this->belongsTo(Category::class, 'parent_category');
    }

    public function varient() {
        return $this->belongsToMany(Product::class, 'product_varients', 'product_id', 'varient_id');
    }

    public function metal_variant() {
        return $this->belongsToMany(MetalVariant::class, 'product_metal_variants');
    }

    public function gemstone_variant() {
        return $this->belongsToMany(GemstoneVariant::class, 'product_gemstone_variants');
    }

    public function metal_variants() {
        return $this->hasMany(ProductMetalVariant::class, 'product_id');
    }

    public function gemstone_variants() {
        return $this->hasMany(ProductGemstoneVariant::class, 'product_id');
    }
}


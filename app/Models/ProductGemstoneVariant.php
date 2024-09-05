<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductGemstoneVariant extends Model
{
    use HasFactory;

    protected $fillable = ['gemstone_variant_id', 'link', 'product_id'];

    public function variant() {
        return $this->belongsTo(GemstoneVariant::class, 'gemstone_variant_id');
    }

    public function product() {
        return $this->belongsTo(Product::class, 'product_id');
    }
}

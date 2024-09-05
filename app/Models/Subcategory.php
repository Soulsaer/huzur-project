<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'title',
        'status',
        'url',
        'parent_category',
        'image'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'parent_category');
    }

    public function childcategories()
    {
        return $this->hasMany(Childcategory::class, 'parent_category');
    }
}

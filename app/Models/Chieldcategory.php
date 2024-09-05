<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chieldcategory extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'title',
        'url',
        'status',
        'parent_category',
        'sub_category'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'parent_category');
    }

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class, 'sub_category');
    }

    public function faqs()
    {
        return $this->hasMany(Faq::class, 'childcategory_id');
    }

}

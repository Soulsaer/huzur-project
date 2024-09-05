<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable =[
        'name',
        'title',
        'status'
    ];


    public static function tree(){
        $allCategories = Category::get();

        $rootCategories = $allCategories->whereNull('parent_category');
        Self::formatTree($rootCategories , $allCategories);

        return  $rootCategories;
    }

    private static function formatTree($categories , $allCategories){
        foreach($categories as $category){
            $category->children = $allCategories->where('parent_category' , $category->id)->values();

            if($category->children->isNotEmpty()){
                Self::formatTree($category->children , $allCategories);
            }
        }
    } 


    // public static function Child

    public function subcategories()
    {
        return $this->hasMany(Subcategory::class, 'parent_category');
    }

    public function childcategories()
    {
        return $this->hasMany(Childcategory::class, 'parent_category');
    }
     public function parentCategory()
    {
        return $this->belongsTo(Category::class, 'parent_category', 'id');
    }
    
    public function faqs()
    {
        return $this->hasMany(Faq::class, 'category_id');
    }
    
}

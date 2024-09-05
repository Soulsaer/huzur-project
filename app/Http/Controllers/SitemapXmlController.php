<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\TblMetaInfo;
use App\Models\Midblog;
use App\Models\Lastblog;
use App\Models\Gellery;
use App\Models\Chieldcategory;
use App\Models\Category;

class SitemapXmlController extends Controller
{
    // public function index() {
    //     $posts = Blog::all();
    //     return response()->view('categorySitemap', [
    //         'posts' => $posts
    //     ])->header('Content-Type', 'text/xml');
    //   }
    public function index() {
         $category = Category::all();
        
         $parent_category = Category::where('parent_category', NULL)->get();
         
         $sub_cat = Category::where('parent_category','!=',NULL)->get();
         
        //  dd($sub_cat);
        $chieldcategory = Chieldcategory::all();  
        
        $childCategories_rings = Chieldcategory::where('parent_category', 32)->get();
        
         $childCategories_necklaces = Chieldcategory::where('parent_category', 40)->get();
         
         
          $childCategories_earrings = Chieldcategory::where('parent_category', 41)->get();
          
           $childCategories_bracelets = Chieldcategory::where('parent_category', 42)->get();
           
      //dd($childCategories_rings);
// Now $childCategories contains a collection of records where the id is 32

       // $posts = TblMetaInfo::all();
       // $midblog = Midblog::all();
       // $lastblog = Lastblog::all();
       // $gellery = Gellery::all();
        // dd($chieldcategory);
        // $posts = $posts->concat($posts);
        // dd($posts);
        return response()->view('categorySitemap', [
            'category' => $category,
            'chieldcategory' => $chieldcategory,
            'childCategories_necklaces' => $childCategories_necklaces,
            'childCategories_rings' => $childCategories_rings,
            'childCategories_earrings' => $childCategories_earrings,
            'childCategories_bracelets' => $childCategories_bracelets,
           // 'posts' => $posts,
           // 'midblog' => $midblog,
            //'lastblog' => $lastblog,
            //'gellery' => $gellery,
            'parent_category' => $parent_category,
            'sub_cat' => $sub_cat,
            
        ])->header('Content-Type', 'text/xml');
      }
}
<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\TblMetaInfo;
use App\Models\Blog;
use App\Models\Shop;
use App\Models\Midblog;
use App\Models\Lastblog;
use App\Models\Slider;
use App\Models\Gellery;
use App\Models\Product;
use App\Models\Chieldcategory;
use App\Models\Subcategory;
use App\Models\Category;
use App\Models\Faq;
use App\Models\Order;
use App\Models\Discover;
use App\Models\Cart;
use App\Models\Ads;
use App\Models\Workshop;
use App\Models\Review;
use App\Models\CustomizationBanner;
use App\Models\Businessbanner;
use App\Models\CustomFurniture;
use App\Models\CelebrateWithColor;
use App\Models\YouCanDo;
use App\Models\ProcessCustomized;
use App\Models\Team;
use App\Models\YourDonation;
use App\Models\Bestjewelry;
use App\Models\HomePageSection;
use DB;
use App\Models\User;
use Auth;

class WebHomeController extends Controller
{
    // public function headercategory(){
    //   $subcategory = Subcategory::find($subcategory_id);
    //   $category = Category::find($category_id);

    //   $childcategories = $subcategory->childcategories()->where('parent_category_id', $category->id)->get();

    // }
    public function index()
    {

        $homeSection = HomePageSection::find(1);
        // dd($homeSection);

        $formatTreeCategory = Category::tree();
        // $subChieldcategory = Chieldcategory::all();
        $subChieldcategory = Chieldcategory::where('status', 1)->get();

        // dd($formatTreeCategory);
        $international_shop = Shop::all();
        $blog = Blog::where("status", "1")->get();
        $ads = Ads::where("status", "1")->get();
        $mustblog = Midblog::where("status", "1")->get();
        $discover = Discover::where("status", "1")->get();
        $lastblog = Lastblog::where("status", "1")->take(4)->orderBy('id', 'desc')->get();
        $slider = Slider::where("status", "1")->get();
        $gellary = Gellery::where("status", "1")->take(4)->get();

        $mostLiked = Product::with('category')->inRandomOrder()->withCount('orders')->take(7)->get();
        // dd($mostLiked);
               
        
        $celebrateWithColor = CelebrateWithColor::where("status", "1")->get();
        $youcando = YouCanDo::where("status", "1")->get();
        
        
        $product = Product::where("status", "1")->get();
        
        $product1 = Product::where('parent_category','32')->inRandomOrder()->take(7)->get();
        $product2 = Product::where('parent_category','41')->inRandomOrder()->take(7)->get();
        $product3 = Product::where('parent_category','40')->inRandomOrder()->take(7)->get();
        $product4 = Product::where('parent_category','42')->inRandomOrder()->take(7)->get();
       
        // dd($product4);
        $faq = Faq::where("study", "no")->get();

        // $product1 = Product::where('category_id', 1)->take(7)->get();
        // $product2 = Product::where('category_id', 2)->take(7)->get();
        // $product3 = Product::where('category_id', 3)->take(7)->get();
        // $product4 = Product::where('category_id', 4)->take(7)->get();
      
        $meta_data = TblMetaInfo::find(1);
        if ($meta_data) {
            $keyword = $meta_data->keyword;
            $title = $meta_data->title;
            $description = $meta_data->description;
            $others = $meta_data->other_meta;
            $content_home = $meta_data->content;
        }


        return view(
            "index",
            compact([
                "ads",
                "homeSection",
                "celebrateWithColor",
                "youcando",
                "international_shop",
                "discover",
                "subChieldcategory",
                "content_home",
                // "formatTreeCategory",
                "keyword",
                "title",
                "others",
                "description",
                "faq",
                "blog",
                "slider",
                "mustblog",
                "lastblog",
                "gellary",
                "product",
                'product1',
                'product2',
                'product3',
                'product4',
                'mostLiked'
                
            ])
        );
    }
    

    public function cart()
    {
        $formatTreeCategory = Category::tree();
        $subChieldcategory = Chieldcategory::all();
        $international_shop = Shop::all();
        // $category = Category::where("status", "1")->get();
        // $subcategory = Subcategory::where("status", "1")->get();
        // $childcategory = Chieldcategory::where("status", "1")->get();

        $meta_data = TblMetaInfo::find(2);
        if ($meta_data) {
            $keyword = $meta_data->keyword;
            $title = $meta_data->title;
            $description = $meta_data->description;
            $others = $meta_data->other_meta;
        }
        return view(
            "cart",
            compact([
                "subChieldcategory",
                "formatTreeCategory",
                "international_shop",
                "keyword",
                "title",
                "others",
                "description",
               
            ])
        );
    }

    public function wishlist()
    {
        $formatTreeCategory = Category::tree();
        $subChieldcategory = Chieldcategory::all();
         $international_shop = Shop::all();
        $category = Category::where("status", "1")->get();
        $subcategory = Subcategory::where("status", "1")->get();
        $childcategory = Chieldcategory::where("status", "1")->get();

        $meta_data = TblMetaInfo::find(3);
        if ($meta_data) {
            $keyword = $meta_data->keyword;
            $title = $meta_data->title;
            $description = $meta_data->description;
            $others = $meta_data->other_meta;
        }
        return view(
            "wishlist",
            compact([
                "subChieldcategory",
                "formatTreeCategory",
                "international_shop",
                "keyword",
                "title",
                "others",
                "description",
               
            ])
        );
    }
    
    
    
    public function category_details(Request $request){

        $slug = $request->segment(1);
                // dd('aaa');
        $formatTreeCategory = Category::tree();
        $subChieldcategory = Chieldcategory::all();
        $categoryData = Category::where('url',$slug)->first();
          $international_shop = Shop::all();
        @$productDetails = Product::where('parent_category',$categoryData->id)->inRandomOrder()->paginate(36);
        // dd($categoryData);
        
       
        @$content =$categoryData->description;
        @$meta_data = TblMetaInfo::find(10);
        if($meta_data){
        //   $keyword = $meta_data->keyword;
        //   $title = $meta_data->title;
        //   $description = $meta_data->description;
        //   $others = $meta_data->other_meta;
          @$keyword =  $categoryData->meta_keyword;
          @$title =  $categoryData->meta_title;
          @$description =  $categoryData->meta_description;
          @$others = $categoryData->other_meta;
          }


        return view('category_details',compact(['international_shop','keyword','title','description','others','formatTreeCategory','subChieldcategory','productDetails' ,'content']));
      }
      
      public function child_category_details($slug ,$child_slug){
        //   dd($slug ,$child_slug);
        $formatTreeCategory = Category::tree();
        $subChieldcategory = Chieldcategory::all();
           $international_shop = Shop::all();
        $categoryData = Category::where('url',$slug)->first();
        
        
         
          
        $childCategoryData = Chieldcategory::where('url',$child_slug)->first();
        $childCategoryData = Chieldcategory::where([['parent_category' ,'=', $categoryData->id],['url','=',$child_slug]])->first();
          
          
 


          
        $productDetails = Product::where([['parent_category', '=',$categoryData->id],['child_category', '=',$childCategoryData->id]])->inRandomOrder()->paginate(36);
     
        $content =$childCategoryData->description;
        $meta_data = TblMetaInfo::find(3);
        if($meta_data){
            //   dd($childCategoryData);
          $keyword = $childCategoryData->meta_keyword;
          $title = $childCategoryData->meta_title;
          $description = $childCategoryData->meta_description;
          $others = $childCategoryData->other_meta;
          }
        return view('category_details',compact(['international_shop','keyword','title','description','others','formatTreeCategory','subChieldcategory','productDetails','content']));
          
      }
    
    
    
    
    //  public function child_category_details(Request $request, $slug, $child_slug){
          
    //     $formatTreeCategory = Category::tree();
    //     $subChieldcategory = Chieldcategory::all();
    //     $categoryData = Category::where('url',$slug)->first();
        
    //      //dd($categoryData);
    //      $childCategoryData = Chieldcategory::where('url',$child_slug)->first();
          
          
    //      //$childCategoryData = Chieldcategory::where('url', $child_slug)->where('url', request()->path())->first();

          
    //       //dd($category);
          
    //     $productDetails = Product::where([['parent_category', '=',$categoryData->id],['child_category', '=',$childCategoryData->id]])->get();
     
    //     $content =$childCategoryData->description;
    //     $meta_data = TblMetaInfo::find(3);
    //     if($meta_data){
    //         //   dd($childCategoryData);
    //       $keyword = $childCategoryData->meta_keyword;
    //       $title = $childCategoryData->meta_title;
    //       $description = $childCategoryData->meta_description;
    //       $others = $childCategoryData->other_meta;
    //       }
    //     return view('category_details',compact(['keyword','title','description','others','formatTreeCategory','subChieldcategory','productDetails','content']));
          
    //   }
    
    
    
    
    
    
    // public function category_details()
    // {
    //     $formatTreeCategory = Category::tree();
    //     $subChieldcategory = Chieldcategory::all();

    //     $meta_data = TblMetaInfo::find(10);
    //     if ($meta_data) {
    //         $keyword = $meta_data->keyword;
    //         $title = $meta_data->title;
    //         $description = $meta_data->description;
    //         $others = $meta_data->other_meta;
    //     }
    //     return view(
    //         "category_details",
    //         compact([
    //             "subChieldcategory",
    //             "formatTreeCategory",
    //             "keyword",
    //             "title",
    //             "description",
    //             "others",
              
    //         ])
    //     );
    // }

    public function userlogin()
    {
        $formatTreeCategory = Category::tree();
        $subChieldcategory = Chieldcategory::all();
           $international_shop = Shop::all();

        $meta_data = TblMetaInfo::find(4);
        if ($meta_data) {
            $keyword = $meta_data->keyword;
            $title = $meta_data->title;
            $description = $meta_data->description;
            $others = $meta_data->other_meta;
        }
        return view(
            "user-login",
            compact([
                "subChieldcategory",
                "formatTreeCategory",
                "international_shop",
                "keyword",
                "title",
                "others",
                "description",
                // "category",
                // "subcategory",
                // "childcategory",
              
            ])
        );
    }

    public function your_Donations()
    {
        $formatTreeCategory = Category::tree();
        $subChieldcategory = Chieldcategory::all();
           $international_shop = Shop::all();

        $category = Category::where("status", "1")->get();
        $subcategory = Subcategory::where("status", "1")->get();
        $childcategory = Chieldcategory::where("status", "1")->get();
        $yourdonations = YourDonation::where("status", "1")->get();
        $meta_data = TblMetaInfo::find(5);
        if ($meta_data) {
            $keyword = $meta_data->keyword;
            $title = $meta_data->title;
            $description = $meta_data->description;
            $others = $meta_data->other_meta;
             $content = $meta_data->content;
        }
        return view(
            "your_Donations",
            compact([
                "yourdonations",
                "subChieldcategory",
                "formatTreeCategory",
                 "international_shop",
                "keyword",
                "title",
                "others",
                "description",
                "content",
               
            ])
        );
    }
    
    
    
    
    
     public function allblogs()
    {
        $formatTreeCategory = Category::tree();
        $subChieldcategory = Chieldcategory::all();
           $international_shop = Shop::all();

        $category = Category::where("status", "1")->get();
        $subcategory = Subcategory::where("status", "1")->get();
        $childcategory = Chieldcategory::where("status", "1")->get();
        
        
         $allblog = Lastblog::where("status", "1")->get();

        $meta_data = TblMetaInfo::find(5);
        if ($meta_data) {
            $keyword = $meta_data->keyword;
            $title = $meta_data->title;
            $description = $meta_data->description;
            $others = $meta_data->other_meta;
            $content = $meta_data->content;
        }
        return view(
           
            "all_blog",
            compact([
                "allblog",
                "subChieldcategory",
                "formatTreeCategory",
                 "international_shop",
                "keyword",
                "title",
                "others",
                "description",
                "content",
               
            ])
        );
    }
    
    
    
    
public function shipping_policy(){
        $formatTreeCategory = Category::tree();
        $subChieldcategory = Chieldcategory::all();
        $international_shop = Shop::all();
        $category = Category::where("status", "1")->get();
        $subcategory = Subcategory::where("status", "1")->get();
        $childcategory = Chieldcategory::where("status", "1")->get();

        $meta_data = TblMetaInfo::find(14);
        if ($meta_data) {
            $keyword = $meta_data->keyword;
            $title = $meta_data->title;
            $description = $meta_data->description;
            $others = $meta_data->other_meta;
             $content = $meta_data->content;
        }
        return view(
           
            "Shipping_policy",
            compact([
                "subChieldcategory",
                "formatTreeCategory",
                 "international_shop",
                "keyword",
                "title",
                "others",
                "description",
                "content",
               
            ])
        );
    }
    
    
    
     
    
public function return_policy(){
    $formatTreeCategory = Category::tree();
    $subChieldcategory = Chieldcategory::all();
    $international_shop = Shop::all();
    $category = Category::where("status", "1")->get();
    $subcategory = Subcategory::where("status", "1")->get();
    $childcategory = Chieldcategory::where("status", "1")->get();

    $meta_data = TblMetaInfo::find(15);
    if ($meta_data) {
        $keyword = $meta_data->keyword;
        $title = $meta_data->title;
        $description = $meta_data->description;
        $others = $meta_data->other_meta;
         $content = $meta_data->content;
    }
    return view(
       
        "return_policy",
        compact([
            "subChieldcategory",
            "formatTreeCategory",
             "international_shop",
            "keyword",
            "title",
            "others",
            "description",
            "content",
           
        ])
    );
}
    
    
    
    
     
public function about_us(){
        $formatTreeCategory = Category::tree();
        $subChieldcategory = Chieldcategory::all();
        $international_shop = Shop::all();
        $category = Category::where("status", "1")->get();
        $subcategory = Subcategory::where("status", "1")->get();
        $childcategory = Chieldcategory::where("status", "1")->get();

        $meta_data = TblMetaInfo::find(5);
        if ($meta_data) {
            $keyword = $meta_data->keyword;
            $title = $meta_data->title;
            $description = $meta_data->description;
            $others = $meta_data->other_meta;
             $content = $meta_data->content;
        }
        return view(
           
            "about_us",
            compact([
                "subChieldcategory",
                "formatTreeCategory",
                 "international_shop",
                "keyword",
                "title",
                "others",
                "description",
                "content",
               
            ])
        );
    }
    
    
    
    
    
    
    
    
    
  public function search(Request $request)
    {
        $query = $request->input('query');

        $products = Product::where('name', 'like', "%$query%")->get();

        return response()->json($products);
    }
    

  public function customization()
{
    $formatTreeCategory = Category::tree();
    $subChieldcategory = Chieldcategory::all();
    $international_shop = Shop::all();
    $workshopimg = Workshop::where('status', 1)->get();
    $recent_reviews = Review::where('status', 1)->get();
    $blog = Lastblog::where("status", "1")->get();
    $faq = Faq::where("study", "no")->get();
     $team = Team::where("status", "1")->get();
    $CustomizationBanner = CustomizationBanner::where("banner_type", "customized-jewelry")->get();
    $custom_furniture = CustomFurniture::where('status', 1)->get();
     $processcustomized = ProcessCustomized::where("status", "1")->get();
     
    $processcustomized_one = ProcessCustomized::where("status", "1")->where("section_type", "section_1")->get();
    $processcustomized_two = ProcessCustomized::where("status", "1")->where("section_type", "section_2")->get();
    $processcustomized_three = ProcessCustomized::where("status", "1")->where("section_type", "section_3")->get();
    $processcustomized_four = ProcessCustomized::where("status", "1")->where("section_type", "section_4")->get();
    $processcustomized_five = ProcessCustomized::where("status", "1")->where("section_type", "section_5")->get();
    
     $cbimg = Bestjewelry::where("status", "1")->where("adstypeimg", "customized-jewelry")->get();
        // $cbimg = Team::where("status", "1")->get();
    $meta_data = TblMetaInfo::find(6);


    $processData = \App\Models\ProcessCustomizeJewelry::find(1);
    $sectionData = \App\Models\CustomizePageSection::find(1);



    $data = [
        "faq" => $faq,
        "workshopimg" => $workshopimg,
        "subChieldcategory" => $subChieldcategory,
        "formatTreeCategory" => $formatTreeCategory,
        "international_shop" => $international_shop,
        "keyword" => null,
        "title" => null,
        "others" => null,
        "description" => null,
        "content" => null,
        "recent_reviews" => $recent_reviews,
        "blog" => $blog,
        "CustomizationBanner" => $CustomizationBanner,
        "custom_furniture" => $custom_furniture,
        "team" => $team,
        "processcustomized" => $processcustomized,
        "processcustomized_one" => $processcustomized_one,
        "processcustomized_two" => $processcustomized_two,
        "processcustomized_three" => $processcustomized_three,
        "processcustomized_four" => $processcustomized_four,
        "processcustomized_five" => $processcustomized_five,
        "cbimg" => $cbimg,
        "processData" => $processData,
        "sectionData" => $sectionData,
    ];

    if ($meta_data) {
        $data["keyword"] = $meta_data->keyword;
        $data["title"] = $meta_data->title;
        $data["description"] = $meta_data->description;
        $data["others"] = $meta_data->other_meta;
        $data["content"] = $meta_data->content;
        //$content_home = $meta_data->content;
        
    }

    return view("customization", $data);
}


    public function singleproduct(Request $request, $url)
    {
        // dd($url);
        $id = $request->id;
        $formatTreeCategory = Category::tree();
        $subChieldcategory = Chieldcategory::all();
        $international_shop = Shop::all();


        // dd($request);
        $slug = $request->segment(1);
 
        $keyword = $title = $description = $others = "";

        $product = Product::with(['metal_variants' => function($q) {
            $q->with('variant');
        }, 'gemstone_variants' => function($q) {
            $q->with('variant');
        }])->where("url_key", $slug)->first();

        $products = Product::where('parent_category', $product->parent_category)->inRandomOrder()
            ->limit(10)
            ->get();
        if (!empty($product)) {
            //dd($product);
            $keyword = $product->meta_keyword;
            $title = $product->meta_title;
            $description = $product->meta_description;
            $others = $product->other_meta;
            

            return view(
                "product_details",
                compact([
                    "subChieldcategory",
                    "formatTreeCategory",
                     "international_shop",
                    "keyword",
                    "title",
                    "description",
                    "others",
                    "product",
                    "products",
                ])
            );
        } else {
            return view(
                "error_404",
                compact([
                    "subChieldcategory",
                    "formatTreeCategory",
                     "international_shop",
                    "keyword",
                    "title",
                    "description",
                    "others",
                ])
            );
        }
    }
    
    
    
     public function singleblogs(Request $request, $id)
    {
           //dd($id);
        $formatTreeCategory = Category::tree();
        $subChieldcategory = Chieldcategory::all();
        $international_shop = Shop::all();
        // dd($request);
        $slug = $request->segment(1);
 
        $keyword = $title = $description = $others = "";
        $blog = Lastblog::where("slug", $slug)->first();
        $blogs = Lastblog::orderby("id", "desc")
            ->limit(10)
            ->get();
        if (!empty($blog)) {
            $keyword = $blog->meta_keyword;
            $title = $blog->meta_title;
            $description = $blog->meta_description;
            $others = $blog->other_meta;
            

            return view(
                "blogs_details",
                compact([
                    "subChieldcategory",
                    "formatTreeCategory",
                     "international_shop",
                    "keyword",
                    "title",
                    "description",
                    "others",
                    "blog",
                    "blogs",
                ])
            );
        } else {
            return view(
                "error_404",
                compact([
                    "subChieldcategory",
                    "formatTreeCategory",
                     "international_shop",
                    "keyword",
                    "title",
                    "description",
                    "others",
                ])
            );
        }
    }
    
    
    
    
    
    
    
//     public function business_us()
//     {
//         $formatTreeCategory = Category::tree();
//         $subChieldcategory = Chieldcategory::all();
//   $international_shop = Shop::all();
   
//   $workshopimg = Workshop::where('status', 1)->get();


//         $meta_data = TblMetaInfo::find(8);
//         if ($meta_data) {
//             $keyword = $meta_data->keyword;
//             $title = $meta_data->title;
//             $description = $meta_data->description;
//             $others = $meta_data->other_meta;
//              $content = $meta_data->content;
//         }
//         return view(
//             "Business_With_Us",
//             "workshopimg",
//             compact([
//                 "subChieldcategory",
//                 "formatTreeCategory",
//                  "international_shop",
//                 "keyword",
//                 "title",
//                 "others",
//                 "description",
//                 "content",
               
//             ])
//         );
//     }


public function businessUs()
{

    $faq = Faq::where("study", "no")->get();
    $recent_reviews = Review::where('status', 1)->get();
    $blog = Lastblog::where("status", "1")->get();
    $team = Team::where("status", "1")->get();

    $meta_data = TblMetaInfo::find(8);
    $lastblog = Lastblog::where("status", "1")->take(4)->orderBy('id', 'desc')->get();

    $whyChoose = \App\Models\WhyChooseHuzurr::get();
    $resellers = \App\Models\WorldwideReseller::get();
    $br_jewelries = \App\Models\BestRatedJewelry::get();


    $businessSection = \App\Models\BusinessPageSection::find(1);

    $data = [
        "keyword" => null,
        "title" => null,
        "others" => null,
        "description" => null,
        "content" => null,
        "faq" => $faq,
        "recent_reviews" => $recent_reviews,
        "blog" => $blog,
        "team" => $team,
        "businessSection" => $businessSection,
        "lastblog" => $lastblog,
        "whyChoose" => $whyChoose,
        "resellers" => $resellers,
        "br_jewelries" => $br_jewelries
    ];
    
    if ($meta_data) {
        $data["keyword"] = $meta_data->keyword;
        $data["title"] = $meta_data->title;
        $data["description"] = $meta_data->description;
        $data["others"] = $meta_data->other_meta;
        $data["content"] = $meta_data->content;
    }
    
    return view("business_with_us", $data);
}


    public function donation()
    {
        $formatTreeCategory = Category::tree();
        $subChieldcategory = Chieldcategory::all();
   $international_shop = Shop::all();
 

        $meta_data = TblMetaInfo::find(7);
        if ($meta_data) {
            $keyword = $meta_data->keyword;
            $title = $meta_data->title;
            $description = $meta_data->description;
            $others = $meta_data->other_meta;
             $content = $meta_data->content;
        }
        return view(
            "donation",
            compact([
                "subChieldcategory",
                "formatTreeCategory",
                 "international_shop",
                "keyword",
                "title",
                "others",
                "description",
                "content",
            
            ])
        );
    }

    public function buy_Only_Gamstones()
    {
        $formatTreeCategory = Category::tree();
        $subChieldcategory = Chieldcategory::all();
   $international_shop = Shop::all();
     

        $meta_data = TblMetaInfo::find(9);
        if ($meta_data) {
            $keyword = $meta_data->keyword;
            $title = $meta_data->title;
            $description = $meta_data->description;
            $others = $meta_data->other_meta;
             $content = $meta_data->content;
        }
        return view(
            "buy_Only_Gamstones",
            compact([
                "subChieldcategory",
                "formatTreeCategory",
                 "international_shop",
                "keyword",
                "title",
                "others",
                "description",
                "content",
             
            ])
        );
    }


 public function addToCart($id)
    {
        $product = Product::findOrFail($id);
        
        // Check if the user is logged in
        if (Auth::check()) {
            // If user is logged in, store the cart items in the database
            Cart::create([
                'user_id' => Auth::user()->id,
                'product_id' => $product->id,
                'qty' => 1,
                'price' => $product->price,
            ]);
        } else {
            // If user is not logged in, store the cart items in the session
            $cart = session()->get('cart', []);
    
            if (isset($cart[$id])) {
                $cart[$id]['qty']++;
            } else {
                $cart[$id] = [
                    'product_id' => $product->id,
                    'name' => $product->name,
                    'qty' => 1,
                    'price' => $product->price,
                    'product_image' => $product->product_image
                ];
            }
    
            session()->put('cart', $cart);
        }
    
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }


public function update(Request $request)
{
    try {
        $id = $request->id;
        $qty = $request->qty;

        if ($id && $qty) {
            // Check if the user is logged in
            if (Auth::check()) {
                // If logged in, update the cart item in the database
                $cartItem = Cart::where('id', $id)
                    ->where('user_id', Auth::user()->id)
                    ->first();

                if ($cartItem) {
                    $cartItem->update(['qty' => $qty]);
                    session()->flash('success', 'Cart updated successfully');
                } else {
                    session()->flash('error', 'Product not found in the cart');
                }
            } else {
                // If not logged in, update the cart item in the session
                $cart = session()->get('cart', []);

                if (isset($cart[$id])) {
                    $cart[$id]["qty"] = $qty;
                    session()->put('cart', $cart);
                    session()->flash('success', 'Cart updated successfully');
                } else {
                    session()->flash('error', 'Product not found in the cart');
                }
            }
        } else {
            session()->flash('error', 'Invalid parameters provided for updating cart');
        }
    } catch (\Exception $e) {
        session()->flash('error', 'An error occurred while updating the cart');
    }
}

public function remove(Request $request)
{
    try {
        $id = $request->id;

        if ($id) {
            // Check if the user is logged in
            if (Auth::check()) {
                // If logged in, remove the cart item from the database
                $cartItem = Cart::where('id', $id)
                    ->where('user_id', Auth::user()->id)
                    ->first();

                if ($cartItem) {
                    $cartItem->delete();
                    session()->flash('success', 'Product removed successfully');
                } else {
                    session()->flash('error', 'Product not found in the cart');
                }
            } else {
                // If not logged in, remove the cart item from the session
                $cart = session()->get('cart', []);

                if (isset($cart[$id])) {
                    unset($cart[$id]);
                    session()->put('cart', $cart);
                    session()->flash('success', 'Product removed successfully');
                } else {
                    session()->flash('error', 'Product not found in the cart');
                }
            }
        } else {
            session()->flash('error', 'Invalid parameter provided for removing product from the cart');
        }
    } catch (\Exception $e) {
        session()->flash('error', 'An error occurred while removing the product from the cart');
    }
}
public function showRegistrationForm(Request $request){
      $formatTreeCategory = Category::tree();
        $subChieldcategory = Chieldcategory::all();
   $international_shop = Shop::all();
   
        $meta_data = TblMetaInfo::find(4);
        if ($meta_data) {
            $keyword = $meta_data->keyword;
            $title = $meta_data->title;
            $description = $meta_data->description;
            $others = $meta_data->other_meta;
        }
        return view(
            "register",
            compact([
                "subChieldcategory",
                "formatTreeCategory",
                 "international_shop",
                "keyword",
                "title",
                "others",
                "description",
              
            ])
        );
}
public function register(Request $request)
    {
         $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed', // 'confirmed' checks if the password_confirmation field matches the password field
            'termCon' => 'required|accepted', // 'accepted' validates that the field is equal to "yes", "on", "1", or true
        ]);

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        // You can log in the user here if needed

        return redirect('/')->with('success', 'Registration successful');
    }
public function webLogin(Request $request)
    {
     
        // $cartData = session('cart');
        // dd($cartData);
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        //   dd($request->all());
        if (Auth::attempt($credentials)) {
            $cartData = session('cart');
        
            if ($cartData !== null) { // Check if $cartData is not null
                // Calculate total quantity and total price
                $totalQuantity = 0;
                $totalPrice = 0;
        
                foreach ($cartData as $item) {
                    $totalQuantity += $item['qty'];
                    $totalPrice += $item['qty'] * $item['price'];
                }
        
                // Save cart records to the Cart model
                if ($cartData) {
                    foreach ($cartData as $item) {
                        Cart::create([
                            'user_id' => Auth::user()->id,
                            'product_id' => $item['product_id'],
                            'qty' => $item['qty'],
                            'price' => $item['price']
                        ]);
                    }
        
                    // Clear the session after saving to the database
                    session(['cart' => []]);
                }
            }
        
            $request->session()->regenerate();
        
            return redirect()->intended('/');
        }

        else{
            // session()->flash('error', 'Invalid credentials');
            // return redirect()->back();
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
    
 public function logout(Request $request)
    {
        Auth::logout();

        // $request->session()->invalidate();

        // $request->session()->regenerateToken();

        return redirect('/');
    }


     public function ordersList()
    {
        // dd('hello');
        if (Auth::check()) {

            $orders = Order::where('user_id', Auth::user()->id)->latest()->paginate(10);
            $title = 'Order Tracking';
            $description = 'Order Tracking';
            $others = 'Order Tracking';
            $keyword = 'Order Tracking';
            $formatTreeCategory = Category::tree();
            $subChieldcategory = Chieldcategory::all();
            $international_shop = Shop::all();


            return view('my_orders', compact('international_shop','title', 'orders','description','others','keyword','formatTreeCategory','subChieldcategory'));
        }
        else{
            return redirect()->route('userlogin'); // Replace 'login' with the actual login route name
        }
    }


    public function trackOrder($id)
    {
        // dd('hello');
        if (Auth::check()) {
            $order = Order::find($id);
            $title = 'Order Tracking';
            $description = 'Order Tracking';
            $others = 'Order Tracking';
            $keyword = 'Order Tracking';
            $formatTreeCategory = Category::tree();
            $subChieldcategory = Chieldcategory::all();
            $international_shop = Shop::all();


            return view('order_track', compact('international_shop','title', 'order','description','others','keyword','formatTreeCategory','subChieldcategory'));
        }
        else{
            return redirect()->route('userlogin'); // Replace 'login' with the actual login route name
        }
    }

    public function contactUs(){
       
        $formatTreeCategory = Category::tree();
        $subChieldcategory = Chieldcategory::all();
        $international_shop = Shop::all();
        $category = Category::where("status", "1")->get();
        $subcategory = Subcategory::where("status", "1")->get();
        $childcategory = Chieldcategory::where("status", "1")->get();

        
        $keyword = "Contact Us";
        $title = "Contact Us";
        $description = "Contact Us";
        $others = "Contact Us";
        $content = "Contact Us";
        
        return view(
           
            "contact",
            compact([
                "subChieldcategory",
                "formatTreeCategory",
                "international_shop",
                "keyword",
                "title",
                "others",
                "description",
                "content",
               
            ])
        );
    }

    public function privacyPolicy() {

        $formatTreeCategory = Category::tree();
        $subChieldcategory = Chieldcategory::all();
        $international_shop = Shop::all();
        $category = Category::where("status", "1")->get();
        $subcategory = Subcategory::where("status", "1")->get();
        $childcategory = Chieldcategory::where("status", "1")->get();

        $keyword = "Privacy Policy";
        $title = "Privacy Policy";
        $description = "Privacy Policy";
        $others = "Privacy Policy";
        $content = "Privacy Policy";

        return view('privacy-policy', compact([
                "subChieldcategory",
                "formatTreeCategory",
                "international_shop",
                "keyword",
                "title",
                "others",
                "description",
                "content",
               
            ])
        );
    }

    public function termsConditions() {

        $formatTreeCategory = Category::tree();
        $subChieldcategory = Chieldcategory::all();
        $international_shop = Shop::all();
        $category = Category::where("status", "1")->get();
        $subcategory = Subcategory::where("status", "1")->get();
        $childcategory = Chieldcategory::where("status", "1")->get();

        $keyword = "Terms & Conditions";
        $title = "Terms & Conditions";
        $description = "Terms & Conditions";
        $others = "Terms & Conditions";
        $content = "Terms & Conditions";

        return view('terms', compact([
                "subChieldcategory",
                "formatTreeCategory",
                "international_shop",
                "keyword",
                "title",
                "others",
                "description",
                "content",
               
            ])
        );
    }
   
}

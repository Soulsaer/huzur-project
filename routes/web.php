<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\WebHomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MetaInformationController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
// use App\Http\Controllers\SubCategoryController;
// use App\Http\Controllers\ChieldcategoryController;
use App\Http\Controllers\SitemapXmlController;
use App\Http\Controllers\DonateController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\JewelryController;
use App\Http\Controllers\BulkOrderController;

use App\Http\Controllers\EnquiryController;


use App\Models\Coupon;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Route::get('/', function () {
//     return view('index');
// });

// Clear route cache
Route::get('/route-cache', function () {
    \Artisan::call('route:cache');
    return 'Routes cache cleared';
});

// Clear config cache
Route::get('/config-cache', function () {
    \Artisan::call('config:cache');
    return 'Config cache cleared';
});

// Clear application cache
Route::get('/clear-cache', function () {
    \Artisan::call('cache:clear');
    return 'Application cache cleared';
});

// Clear view cache
Route::get('/view-clear', function () {
    \Artisan::call('view:clear');
    return 'View cache cleared';
});

// Clear cache using reoptimized class
Route::get('/optimize-clear', function () {
    \Artisan::call('optimize:clear');
    return 'View cache cleared';
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/orders', [WebHomeController::class, 'ordersList'])->name('orders');
Route::get('/order-tracking/{order_id}', [WebHomeController::class, 'trackOrder'])->name('order.track');

Route::post('buy-now', [CheckoutController::class, 'buyNow'])->name('buy_now');
Route::get('buy-now-cod/{order_id}', [CheckoutController::class, 'buyNowCod'])->name('buy_now_cod');
Route::get('buy-now-from-cart', [CheckoutController::class, 'buyNowCart'])->name('buy_now_cart');
Route::post('billing-details/store', [CheckoutController::class, 'billingDetailStore'])->name('billing_detail_store');

Route::get('stripe', [CheckoutController::class, 'stripe']);
Route::post('stripe', [CheckoutController::class, 'stripePost'])->name('stripe.post');

// Authentication routes
// Route::get('login', [CustomAuthController::class, 'index'])->name('login');
// Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
// Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
// Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
// Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');



// Home routes
Route::get('/', [WebHomeController::class, 'index'])->name('homeIndex');
Route::get('cart', [WebHomeController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [WebHomeController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [WebHomeController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [WebHomeController::class, 'remove'])->name('remove.from.cart');
Route::get('wishlist', [WebHomeController::class, 'wishlist'])->name('wishlist');
Route::post('/donate', [DonateController::class, 'submit'])->name('donate.submit');
Route::get('userlogin', [WebHomeController::class, 'userlogin'])->name('userlogin');
Route::get('/register', [WebHomeController::class, 'showRegistrationForm'])->name('show-register');
Route::post('/user-register', [WebHomeController::class, 'register'])->name('register');
Route::post('/web-login', [WebHomeController::class, 'webLogin'])->name('web-login');
Route::post('/logout', [WebHomeController::class, 'logout'])->name('logout');
Route::get('business-with-us', [WebHomeController::class, 'businessUs'])->name('business_us');
Route::get('donation', [WebHomeController::class, 'donation'])->name('donation');
Route::get('gemstones', [WebHomeController::class, 'buy_Only_Gamstones'])->name('buy-Only-Gamstones');
Route::get('customized-jewelry', [WebHomeController::class, 'customization'])->name('customizaton');
Route::get('your-donations', [WebHomeController::class, 'your_Donations'])->name('your-donations');
Route::get('/sitemap.xml', [SitemapXmlController::class, 'index']);

Route::get('blogs', [WebHomeController::class, 'allblogs'])->name('blogs');
Route::get('shipping-policy', [WebHomeController::class, 'shipping_policy'])->name('shipping_policy');
Route::get('return-policy', [WebHomeController::class, 'return_policy'])->name('return_policy');
Route::get('about-us', [WebHomeController::class, 'about_us'])->name('about_us');
Route::get('contact-us', [WebHomeController::class, 'contactUs'])->name('contactUs');
Route::get('privacy-policy', [WebHomeController::class, 'privacyPolicy'])->name('privacyPolicy');
Route::get('terms-conditions', [WebHomeController::class, 'termsConditions'])->name('termsConditions');


Route::post('/enquiry-form', [EnquiryController::class, 'store'])->name('enquiry.submit');

// routes/web.php
// Route::get('/search', [WebHomeController::class, 'search'])->name('search');
// Route::get('/search/products', 'ProductController@search')->name('search.products');

// Route::get('/product/{product_id}/{id}', [WebHomeController::class, ''])->name('product.detail');
// Route::get('/{product_id}/{id}', [WebHomeController::class, 'singleProduct'])->name('product.detail');

// Route::get('/product/{id}', [WebHomeController::class, 'singleproduct'])->name('product');

// // Dynamic product routes
// $productsRoute = DB::table('products')->get();
// foreach ($productsRoute as $value) {
//     Route::get($value->url_key,$value->id, '\App\Http\Controllers\WebHomeController@singleproduct');
// }


// Fetch product data from the database
// $products = DB::table('products')->get();

// Iterate through products and register routes
// foreach ($products as $product) {
//     Route::get($product->url_key . '/{id}', [WebHomeController::class, 'singleproduct'])->name('singleproduct');
// }


Route::get('/jewelry/form', [JewelryController::class, 'showForm']);
Route::post('/jewelry/submit', [JewelryController::class, 'submitForm']);

Route::post('/bulkorder-list', [BulkOrderController::class, 'bulkOrder'])->name('bulkorder.list');


Route::post('bulkorder-list', [BulkOrderController::class, 'bulkOrder'])->name('bulkorder-list');



Route::post('/bulk-order/submit', [BulkOrderController::class, 'submitForm'])->name('bulk-order.submit');


// Fetch Blogs data from the database
$blogs = DB::table('lastblogs')->get();

// Iterate through products and register routes
foreach ($blogs as $blog) {
    Route::get($blog->slug . '/{id}', [WebHomeController::class, 'singleblogs'])->name('singleblogs');
}


// Other routes
Route::get('/about', [WebHomeController::class, 'about']);
// Route::get('/blogs', [WebHomeController::class, 'blogs']);
// Route::resource('contact-us', ContactController::class);


// Other routes
Route::post('upload-blog-image', 'BlogController@upload')->name('upload-blog-image'); 
// Route::get('/{slug}', [WebHomeController::class, 'category_details'])->name('category_details');
$categoryRoute = \App\Models\Category::select('name', 'url')->get();
foreach ($categoryRoute as $r) {
    Route::get($r->url, '\App\Http\Controllers\WebHomeController@category_details')->name($r->url);
} 
Route::get('/{slug}/{child_slug}', [WebHomeController::class, 'child_category_details'])->name('child_category_details');
Auth::routes();

// Route::get('/home', [App\Http\Controllers\WebHomeController::class, 'index'])->name('home');

Route::get('{url}', [WebHomeController::class, 'singleproduct'])->name('singleproduct');





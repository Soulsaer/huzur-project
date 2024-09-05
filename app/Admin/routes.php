<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');

    $router->resource('sliders', SliderController::class);
    $router->resource('tbl-meta-infos', PageController::class);
    $router->resource('shops', ShopController::class);
    $router->resource('ads', AdsController::class);
    $router->resource('products', ProductController::class);
    $router->resource('orders', OrderController::class);

    $router->resource('categories', CategoryController::class);
    $router->resource('childcategories', ChieldcategoryController::class);
    $router->resource('subcategories', SubcategoryController::class);
    $router->resource('faqs', FaqController::class);
    $router->resource('workshops', WorkshopController::class);
    $router->resource('reviews', ReviewController::class);
    $router->resource('customization-banners', CustomizationBannerController::class);
    $router->resource('custom-furnitures', CustomFurnitureController::class);
    $router->resource('celebrate-with-colors', CelebrateWithColorController::class);
    $router->resource('you-can-dos', YouCanDoController::class);
    $router->resource('teams', TeamController::class);
    $router->resource('bulk-orders', BulkOrderController::class);
    $router->resource('midblogs', MidblogController::class);
    $router->resource('lastblogs', LastblogController::class);
    $router->resource('discovers', DiscoverController::class);
    $router->resource('gelleries', GelleryController::class);

    $router->resource('customize-page-sections', CustomizePageSectionController::class);
    $router->resource('process-customize-jewelries', ProcessCustomizeJewelryController::class);
    $router->resource('business-page-sections', BusinessPageSectionController::class);
    $router->resource('home-page-sections', HomePageSectionController::class);
    $router->resource('metal-variants', MetalVariantController::class);
    $router->resource('gemstone-variants', GemstoneVariantController::class);

    $router->resource('why-choose-huzurrs', WhyChooseHuzurrController::class);
    $router->resource('worldwide-resellers', WorldwideResellerController::class);
    $router->resource('best-rated-jewelries', BestRatedJewelryController::class);

});

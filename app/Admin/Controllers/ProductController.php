<?php

namespace App\Admin\Controllers;

use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Models\Product;
use Carbon\Carbon;
use App\Models\Category;
use App\Models\Chieldcategory;
// use Image;
// use Intervention\Image\Facades\Image;
// use Spatie\LaravelImageOptimizer\Facades\ImageOptimizer;
use Illuminate\Support\Facades\Storage;
use Spatie\ImageOptimizer\OptimizerChainFactory;

class ProductController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Products';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Product());

        $grid->column('id', __('Id'));
        $grid->column('product_image', __('Product Image'))->image('', 100, 100);
        $grid->column('second_image', __('Second Image'))->image('', 100, 100);
        $grid->column('status', __('Status'))->icon([
            0 => 'toggle-off',
            1 => 'toggle-on',
        ], $default = '');
        $grid->column('name', __('Name'));
        // $grid->column('is_featured', __('Is featured'));
        $grid->column('sku', __('SKU'));
        $grid->column('qty', __('QTY'));
        // $grid->column('parent_category', __('Parent category'));
        // $grid->column('child_category', __('Child category'));
        // $grid->column('stock_status', __('Stock status'));
        // $grid->column('weight', __('Weight'));
        $grid->column('price', __('Price'));
        // $grid->column('special_price', __('Special price'));
        // $grid->column('short_description', __('Short description'));
        // $grid->column('description', __('Description'));
        // $grid->column('url_key', __('Url key'));
        // $grid->column('meta_description', __('Meta description'));
        // $grid->column('meta_title', __('Meta title'));
        // $grid->column('related_product', __('Related product'));
        // $grid->column('material', __('Material'));
        // $grid->column('other_meta', __('Other meta'));
        // $grid->column('gemstone', __('Gemstone'));
        // $grid->column('primaryy', __('Primaryy'));
        // $grid->column('gemcolour', __('Gemcolour'));
        // $grid->column('bandcolour', __('Bandcolour'));
        // $grid->column('setting', __('Setting'));
        // $grid->column('cuttype', __('Cuttype'));
        // $grid->column('Shanktype', __('Shanktype'));
        // $grid->column('style', __('Style'));
        // $grid->column('salespackage', __('Salespackage'));
        // $grid->column('video', __('Video'));
        // $grid->column('test_one', __('Test one'));
        // $grid->column('test_two', __('Test two'));
        // $grid->column('test_three', __('Test three'));
        // $grid->column('test_four', __('Test four'));
        // $grid->column('main_stone_size', __('Main stone size'));
        // $grid->column('secondary_stone_size', __('Secondary stone size'));
        // $grid->column('secondary_colour', __('Secondary colour'));
        // $grid->column('stone_shape', __('Stone shape'));
        // $grid->column('cut_type', __('Cut type'));
        // $grid->column('with_chain', __('With chain'));
        // $grid->column('ring_size', __('Ring size'));
        // $grid->column('bead_shape', __('Bead shape'));
        // $grid->column('chain_type', __('Chain type'));
        // $grid->column('adjestable', __('Adjestable'));
        // $grid->column('drop_length', __('Drop length'));
        // $grid->column('spiner', __('Spiner'));
        // $grid->column('gender', __('Gender'));
        // $grid->column('length', __('Length'));
        // $grid->column('ro_stone', __('Ro stone'));
        // $grid->column('bracelet_width', __('Bracelet width'));
        // $grid->column('pendant_width', __('Pendant width'));
        // $grid->column('width', __('Width'));
        // $grid->column('bracelet_length', __('Bracelet length'));
        // $grid->column('pendant_height', __('Pendant height'));
        // $grid->column('shape', __('Shape'));
        // $grid->column('closure', __('Closure'));
        // $grid->column('necklace_ength', __('Necklace ength'));
        // $grid->column('location', __('Location'));
        // $grid->column('updated_at', __('Updated at'));
        $grid->column('created_at', __('Date'))->display(function($date) {
            return Carbon::parse($date)->format(config('huzurr.datetime_format'));
        });
        $grid->model()->orderBy('id', 'desc');

        // $grid->actions(function($action) {
        //     $action->disableView();
        // });

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Product::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('status', __('Status'));
        $show->field('is_featured', __('Is featured'));
        $show->field('sku', __('Sku'));
        $show->field('qty', __('Qty'));
        $show->field('parent_category', __('Parent category'));
        $show->field('child_category', __('Child category'));
        $show->field('stock_status', __('Stock status'));
        $show->field('weight', __('Weight'));
        $show->field('price', __('Price'));
        $show->field('special_price', __('Special price'));
        $show->field('short_description', __('Short description'));
        $show->field('description', __('Description'));
        $show->field('url_key', __('Url key'));
        $show->field('meta_description', __('Meta description'));
        $show->field('meta_title', __('Meta title'));
        $show->field('related_product', __('Related product'));
        $show->field('material', __('Material'));
        $show->field('other_meta', __('Other meta'));
        $show->field('gemstone', __('Gemstone'));
        $show->field('primaryy', __('Primaryy'));
        $show->field('gemcolour', __('Gemcolour'));
        $show->field('bandcolour', __('Bandcolour'));
        $show->field('setting', __('Setting'));
        $show->field('cuttype', __('Cuttype'));
        $show->field('Shanktype', __('Shanktype'));
        $show->field('style', __('Style'));
        $show->field('salespackage', __('Salespackage'));
        $show->field('video', __('Video'));
        $show->field('product_image', __('Product image'));
        $show->field('second_image', __('Second image'));
        $show->field('test_one', __('Test one'));
        $show->field('test_two', __('Test two'));
        $show->field('test_three', __('Test three'));
        $show->field('test_four', __('Test four'));
        $show->field('main_stone_size', __('Main stone size'));
        $show->field('secondary_stone_size', __('Secondary stone size'));
        $show->field('secondary_colour', __('Secondary colour'));
        $show->field('stone_shape', __('Stone shape'));
        $show->field('cut_type', __('Cut type'));
        $show->field('with_chain', __('With chain'));
        $show->field('ring_size', __('Ring size'));
        $show->field('bead_shape', __('Bead shape'));
        $show->field('chain_type', __('Chain type'));
        $show->field('adjestable', __('Adjestable'));
        $show->field('drop_length', __('Drop length'));
        $show->field('spiner', __('Spiner'));
        $show->field('gender', __('Gender'));
        $show->field('length', __('Length'));
        $show->field('ro_stone', __('Ro stone'));
        $show->field('bracelet_width', __('Bracelet width'));
        $show->field('pendant_width', __('Pendant width'));
        $show->field('width', __('Width'));
        $show->field('bracelet_length', __('Bracelet length'));
        $show->field('pendant_height', __('Pendant height'));
        $show->field('shape', __('Shape'));
        $show->field('closure', __('Closure'));
        $show->field('necklace_ength', __('Necklace ength'));
        $show->field('location', __('Location'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Product());

        $productId = app('request')->product;

        $childCategories = [];
        if (!is_null($productId)) {
            $product = Product::find($productId);

            if ($product) {
                $categoryId = $product->parent_category;

                if (!is_null($categoryId)) {
                    $childCategories = Chieldcategory::where('parent_category', $categoryId)->get()->pluck('name', 'id');
                }
            }
        }


        $categories = Category::get()->pluck('name', 'id');
        $subCategories = Chieldcategory::get()->pluck('name', 'id');

        $form->tab('Basic info', function ($form) {
            $form->text('name', __('Product Name'))->rules('required|max:200|min:4');
            $form->textarea('meta_title', __('Meta Title'))->rules('max:200');
            $form->textarea('meta_description', __('Meta description'));
            $form->ckeditor('description', __('Description'));
            $form->textarea('other_meta', __('Other meta'));

            $form->text('sku', __('Product Sku'));
            $form->number('qty', __('Product Qty'));
            $form->switch('stock_status', __('Stock status'));
            $form->text('weight', __('Product Weight'));
            $form->decimal('price', __('Product Price'));
            $form->decimal('special_price', __('Special Price'));


            $form->switch('status', __('Status'))->rules('required');
            $form->switch('is_featured', __('Is featured'));

            // $form->textarea('short_description', __('Short description'));
            
            $form->text('url_key', __('Url Key'));
            
            $form->text('related_product', __('Related Product'));
            $form->text('material', __('Material'));
            // $form->textarea('other_meta', __('Other meta'));
            $form->text('gemstone', __('Gemstone'));
            $form->text('primaryy', __('Primary Colour'));
            $form->text('secondary_colour', __('Secondary Colour'));
            $form->text('gemcolour', __('Gem Colour'));
            $form->text('bandcolour', __('Band Colour'));
            $form->text('setting', __('Setting'));
            
            $form->text('main_stone_size', __('Main Stone Size'));
            $form->text('secondary_stone_size', __('Secondary Stone Size'));
            
            $form->text('stone_shape', __('Stone Shape'));

        })->tab('Category', function($form) use ($categories, $childCategories, $subCategories) {
            $form->select('parent_category', __('Parent Category'))->options($categories)->load('child_category', '/api/admin/get-child-category')->when(32, function (Form $form) use ($childCategories) {
                $form->select('child_category', __('Child Category'))->options($childCategories)->rules('required');
                $form->text('ring_size', __('Ring size'));
                $form->text('adjestable', __('Adjestable'));
                $form->text('spiner', __('Spiner'));
                $form->text('gender', __('Gender'));
                $form->text('ro_stone', __('Ro stone'));
                $form->text('cut_type', __('Cut type'));
                $form->text('Shanktype', __('Shank Type'));
                $form->text('style', __('Style'));
                $form->text('salespackage', __('Sales Package'));

            })->when(40, function (Form $form) use ($childCategories) {

                $form->select('child_category', __('Child Category'))->options($childCategories)->rules('required');
                $form->text('gender', __('Gender'));
                $form->text('style', __('Style'));
                $form->text('cut_type', __('Cut type'));
                $form->text('with_chain', __('With chain'));
                $form->text('chain_type', __('Chain type'));
                $form->text('shape', __('Shape'));
                $form->text('pendant_width', __('Pendant width'));
                $form->text('pendant_height', __('Pendant height'));
                $form->text('necklace_ength', __('Necklace length'));

            })->when(41, function (Form $form) use ($childCategories) {

                $form->select('child_category', __('Child Category'))->options($childCategories)->rules('required');
                $form->text('gender', __('Gender'));
                $form->text('style', __('Style'));
                $form->text('cut_type', __('Cut type'));
                $form->text('drop_length', __('Drop length'));
                $form->text('width', __('Width'));
                $form->text('length', __('Length'));
                $form->text('shape', __('Shape'));
                $form->text('closure', __('Closure'));
                $form->text('location', __('Location'));

            })->when(42, function (Form $form) use ($childCategories) {

                $form->select('child_category', __('Child Category'))->options($childCategories);
                $form->text('adjestable', __('Adjestable'));
                $form->text('gender', __('Gender'));
                $form->text('cut_type', __('Cut type'));
                $form->text('style', __('Style'));
                $form->text('closure', __('Closure'));
                $form->text('bead_shape', __('Bead shape'));
                $form->text('bracelet_width', __('Bracelet width'));
                $form->text('bracelet_length', __('Bracelet length'));

            })->rules('required');

            $form->divider('Show Product in Categories');
            $form->multipleSelect('categories_ids', __('Category'))->options($categories)->load('sub_categories_ids', '/api/admin/get-child-category');
            $form->multipleSelect('sub_categories_ids', __('Sub Category'))->options($childCategories);

            $metalVariants = \App\Models\MetalVariant::get()->pluck('name', 'id');
            $gemstoneVariants = \App\Models\GemstoneVariant::get()->pluck('name', 'id');

            $form->hasMany('metal_variants', 'Metal Variants', function (Form\NestedForm $form) use($metalVariants) {
                $form->select('metal_variant_id', 'Metal Variant')->options($metalVariants);
                $form->text('link');
            });

            $form->hasMany('gemstone_variants', 'Gemstone Variants', function (Form\NestedForm $form) use($gemstoneVariants) {
                $form->select('gemstone_variant_id', 'Gemstone Variant')->options($gemstoneVariants);
                $form->text('link');
            });

            // $form->text('cut_type', __('Cut type'));
            // $form->text('with_chain', __('With chain'));
            
            // $form->text('bead_shape', __('Bead shape'));
            // $form->text('chain_type', __('Chain type'));
            // $form->text('adjestable', __('Adjestable'));
            // $form->text('drop_length', __('Drop length'));
            // $form->text('spiner', __('Spiner'));
            // $form->text('gender', __('Gender'));
            // $form->text('length', __('Length'));
            // $form->text('ro_stone', __('Ro stone'));
            // $form->text('bracelet_width', __('Bracelet width'));
            // $form->text('pendant_width', __('Pendant width'));
            // $form->text('width', __('Width'));
            // $form->text('bracelet_length', __('Bracelet length'));
            // $form->text('pendant_height', __('Pendant height'));
            // $form->text('shape', __('Shape'));
            // $form->text('closure', __('Closure'));
            // $form->text('necklace_ength', __('Necklace length'));
            // $form->text('location', __('Location'));
            // // $form->text('cuttype', __('Cuttype'));
            // $form->text('Shanktype', __('Shank Type'));
            // $form->text('style', __('Style'));
            // $form->text('salespackage', __('Sales Package'));

        })->tab('Images and Video', function ($form) {

            $form->file('video', __('Video'))->uniqueName()->downloadable()->move('product_img')->rules('nullable|mimes:mp4,avi,mov,wmv|max:100000');
            $form->image('product_image', __('Product Image'))->uniqueName()->downloadable()->move('product_img')->rules('required');
            $form->image('second_image', __('Second Image'))->uniqueName()->downloadable()->move('product_img')->rules('required');
            $form->image('test_one', __('Test One'))->uniqueName()->downloadable()->move('product_img');
            $form->image('test_two', __('Test Two'))->uniqueName()->downloadable()->move('product_img');
            $form->image('test_three', __('Test Three'))->uniqueName()->downloadable()->move('product_img');
            $form->image('test_four', __('Test Four'))->uniqueName()->downloadable()->move('product_img');

        });

        // $form->saving(function($form) {
        //     $image = $request->file('image');

        //     // Create an intervention image instance
        //     $img = Image::make($image->getRealPath());

        //     $imageName = uniqid();

        //     // Define the path to save the WebP image
        //     $webpPath = public_path('product_img/' . $imageName . '.webp');

        //     // Save the image as WebP
        //     $img->encode('webp', 90)->save($webpPath);

        //     // Optimize the WebP image
        //     ImageOptimizer::optimize($webpPath);
        // });

        $form->saved(function ($form) {
            // Trigger optimization after saving
            $this->optimizeImages($form->model());
        });
        return $form;
    }

    protected function optimizeImages($product)
    {
        // Example paths for images
        $imageFields = ['product_image', 'second_image', 'test_one', 'test_two', 'test_three', 'test_four'];

        foreach ($imageFields as $field) {
            if ($product->$field) {
                // Get the file path
                $filePath = $product->$field;
                $fullPath = public_path('storage/' . $filePath);

                if (Storage::disk('public')->exists($filePath)) {
                    // Define the WebP path
                    $webpPath = 'product_img/' . uniqid() . '.webp';
                    $webpFullPath = storage_path('app/public/' . $webpPath);
                    // dd($webpFullPath);
                    // Convert the image to WebP format using native PHP functions
                    $image = $this->convertToWebp($fullPath, $webpFullPath);

                    // Optimize the WebP image
                    $optimizer = OptimizerChainFactory::create();
                    $optimizer->optimize($webpFullPath);

                    // Update the product model to use the WebP image path
                    $product->$field = $webpPath;
                    $product->save();

                    // Optionally delete the original file
                    Storage::disk('public')->delete($filePath);
                }
            }
        }
    }

    protected function convertToWebp($sourcePath, $destinationPath)
    {
        $imageInfo = getimagesize($sourcePath);
        $mimeType = $imageInfo['mime'];

        switch ($mimeType) {
            case 'image/jpeg':
                $image = imagecreatefromjpeg($sourcePath);
                break;
            case 'image/png':
                $image = imagecreatefrompng($sourcePath);
                break;
            case 'image/gif':
                $image = imagecreatefromgif($sourcePath);
                break;
            default:
                return false;
        }

        // Save the image as WebP
        imagewebp($image, $destinationPath, 90);
        imagedestroy($image);

        return true;
    }

}

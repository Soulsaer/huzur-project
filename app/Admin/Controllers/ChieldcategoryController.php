<?php

namespace App\Admin\Controllers;

use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Models\Chieldcategory;
use App\Models\Category;
use App\Models\Subcategory;

class ChieldcategoryController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Chieldcategory';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Chieldcategory());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('image', __('Image'))->image('', 100, 100);
        $grid->column('status', __('Status'))->icon([
            0 => 'toggle-off',
            1 => 'toggle-on',
        ], $default = '');
        $grid->column('category.name', __('Parent category'));
        // $grid->column('subcategory.name', __('Sub category'));

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
        $show = new Show(Chieldcategory::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('title', __('Title'));
        $show->field('url', __('Url'));
        $show->field('image', __('Image'));
        $show->field('meta_title', __('Meta title'));
        $show->field('meta_description', __('Meta description'));
        $show->field('other_meta', __('Other meta'));
        $show->field('meta_keyword', __('Meta keyword'));
        $show->field('description', __('Description'));
        $show->field('status', __('Status'));
        $show->field('parent_category', __('Parent category'));
        $show->field('sub_category', __('Sub category'));
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
        $form = new Form(new Chieldcategory());

        $categories = Category::get()->pluck('name', 'id');
        $subCategories = Subcategory::get()->pluck('name', 'id');

        $form->text('name', __('Name'));
        $form->text('title', __('Title'));
        $form->url('url', __('Url'));
        $form->image('image', __('Image'));
        $form->textarea('meta_title', __('Meta title'));
        $form->textarea('meta_description', __('Meta description'));
        $form->textarea('other_meta', __('Other meta'));
        $form->textarea('meta_keyword', __('Meta keyword'));
        $form->textarea('description', __('Description'));
        $form->text('status', __('Status'));
        $form->select('parent_category', __('Parent category'))->options($categories);
        // $form->select('sub_category', __('Sub Category'))->options($subCategories);

        $form->hasMany('faqs', function (Form\NestedForm $form) {
            $form->text('question', __('Question'));
            $form->textarea('answer', __('Answer'));
        });

        return $form;
    }
}

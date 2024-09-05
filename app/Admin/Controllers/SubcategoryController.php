<?php

namespace App\Admin\Controllers;

use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use \App\Models\Subcategory;

class SubcategoryController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Subcategory';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Subcategory());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('title', __('Title'));
        $grid->column('image', __('Image'))->image('', 100, 100);
        $grid->column('status', __('Status'))->icon([
            0 => 'toggle-off',
            1 => 'toggle-on',
        ], $default = '');
        $grid->column('category.name', __('Parent category'));
        

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
        $show = new Show(Subcategory::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('title', __('Title'));
        $show->field('image', __('Image'));
        $show->field('url', __('Url'));
        $show->field('parent_category', __('Parent Category'));
        $show->field('status', __('Status'));
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
        $form = new Form(new Subcategory());

        $categories = \App\Models\Category::get()->pluck('name', 'id');

        $form->text('name', __('Name'));
        $form->text('title', __('Title'));
        $form->image('image', __('Image'));
        $form->url('url', __('Url'));
        $form->select('parent_category', __('Parent category'))->options($categories);
        $form->switch('status', __('Status'));

        return $form;
    }
}

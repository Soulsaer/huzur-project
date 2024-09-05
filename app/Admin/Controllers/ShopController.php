<?php

namespace App\Admin\Controllers;

use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Models\Shop;
use Carbon\Carbon;

class ShopController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'International Shops';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Shop());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('link', __('Link'));
        $grid->column('alt_tag', __('Alt Tag'));
        $grid->column('image', __('Image'))->image();
        $grid->column('created_at', __('Created at'))->display(function($date) {
            return Carbon::parse($date)->format(config('huzurr.datetime_format'));
        });
        $grid->column('updated_at', __('Updated at'))->display(function($date) {
            return Carbon::parse($date)->format(config('huzurr.datetime_format'));
        });

        $grid->actions(function($action) {
            $action->disableView();
        });

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
        $show = new Show(Shop::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('link', __('Link'));
        $show->field('alt_tag', __('Alt tag'));
        $show->field('image', __('Image'));
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
        $form = new Form(new Shop());

        $form->text('name', __('Name'));
        $form->url('link', __('Link'));
        $form->text('alt_tag', __('Alt tag'));
        $form->image('image', __('Image'));

        return $form;
    }
}

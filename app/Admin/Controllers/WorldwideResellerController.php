<?php

namespace App\Admin\Controllers;

use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use \App\Models\WorldwideReseller;
use Carbon\Carbon;

class WorldwideResellerController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Worldwide Reseller';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new WorldwideReseller());

        $grid->column('id', __('Id'));
        $grid->column('country_name', __('Country name'));
        $grid->column('reseller_name', __('Reseller name'));
        $grid->column('image', __('Image'))->image('', 60, 60);
        $grid->column('mobile', __('Mobile'));
        $grid->column('created_at', __('Created at'))->display(function($date) {
            return Carbon::parse($date)->format(config('huzurr.datetime_format'));
        });
        $grid->column('updated_at', __('Updated at'))->display(function($date) {
            return Carbon::parse($date)->format(config('huzurr.datetime_format'));
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
        $show = new Show(WorldwideReseller::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('country_name', __('Country name'));
        $show->field('reseller_name', __('Reseller name'));
        $show->field('image', __('Image'));
        $show->field('mobile', __('Mobile'));
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
        $form = new Form(new WorldwideReseller());

        $form->text('country_name', __('Country name'))->rules('required');
        $form->text('reseller_name', __('Reseller name'))->rules('required');
        $form->text('mobile', __('Mobile'));
        $form->image('image', __('Image'))->uniqueName()->downloadable()->move('resellers');;

        return $form;
    }
}

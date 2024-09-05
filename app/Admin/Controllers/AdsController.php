<?php

namespace App\Admin\Controllers;

use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use \App\Models\Ads;
use Carbon\Carbon;

class AdsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Ads';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Ads());

        $grid->column('id', __('Id'));
        $grid->column('banner', __('Banner'))->image('', 100, 50);
        $grid->column('status', __('Status'))->icon([
            0 => 'toggle-off',
            1 => 'toggle-on',
        ], $default = '');
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
        $show = new Show(Ads::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('banner', __('Banner'));
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
        $form = new Form(new Ads());

        $form->image('banner', __('Banner'))->uniqueName()->downloadable()->move('adsimg');
        $form->text('alt_tag', __('Alt Tag'));
        $form->switch('status', __('Status'));

        return $form;
    }
}

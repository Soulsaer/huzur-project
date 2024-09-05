<?php

namespace App\Admin\Controllers;

use App\Models\CelebrateWithColor;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Carbon\Carbon;

class CelebrateWithColorController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Celebrate With Color';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new CelebrateWithColor());

        $grid->column('id', __('Id'));
        $grid->column('title', __('Title'));
        $grid->column('status', __('Status'))->icon([
            0 => 'toggle-off',
            1 => 'toggle-on',
        ], $default = '');
        $grid->column('banner', __('Banner'));
        $grid->column('alt', __('Alt'));
        // $grid->column('banner_f', __('Banner f'));
        // $grid->column('banner_2', __('Banner 2'));
        // $grid->column('banner_3', __('Banner 3'));
        // $grid->column('title', __('Title'));
        // $grid->column('discription', __('Discription'));
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
        $show = new Show(CelebrateWithColor::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('status', __('Status'));
        $show->field('banner', __('Banner'));
        $show->field('alt', __('Alt'));
        $show->field('banner_f', __('Banner f'));
        $show->field('banner_2', __('Banner 2'));
        $show->field('banner_3', __('Banner 3'));
        $show->field('title', __('Title'));
        $show->field('discription', __('Discription'));
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
        $form = new Form(new CelebrateWithColor());

        $form->switch('status', __('Status'));
        $form->image('banner', __('Banner'))->uniqueName()->downloadable()->move('colors');
        $form->text('alt', __('Alt'));
        $form->image('banner_f', __('Banner f'))->uniqueName()->downloadable()->move('colors');
        $form->image('banner_2', __('Banner 2'))->uniqueName()->downloadable()->move('colors');
        $form->image('banner_3', __('Banner 3'))->uniqueName()->downloadable()->move('colors');
        $form->text('title', __('Title'));
        $form->textarea('discription', __('Discription'));

        return $form;
    }
}

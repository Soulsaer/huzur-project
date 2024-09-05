<?php

namespace App\Admin\Controllers;

use App\Models\Workshop;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Carbon\Carbon;

class WorkshopController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Workshop';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Workshop());

        $grid->column('id', __('Id'));
        $grid->column('banner', __('Banner'));
        $grid->column('status', __('Status'))->icon([
            0 => 'toggle-off',
            1 => 'toggle-on',
        ], $default = '');
        $grid->column('alt', __('Alt'));
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
        $show = new Show(Workshop::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('banner', __('Banner'));
        $show->field('status', __('Status'));
        $show->field('alt', __('Alt'));
        $show->field('updated_at', __('Updated at'));
        $show->field('created_at', __('Created at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Workshop());

        $form->image('banner', __('Banner'))->uniqueName()->downloadable()->move('workshops');
        $form->switch('status', __('Status'));
        $form->text('alt', __('Alt'));

        return $form;
    }
}

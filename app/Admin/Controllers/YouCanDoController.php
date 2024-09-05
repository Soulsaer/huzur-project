<?php

namespace App\Admin\Controllers;

use App\Models\YouCanDo;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Carbon\Carbon;

class YouCanDoController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'You Can Do';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new YouCanDo());

        $grid->column('id', __('Id'));
        $grid->column('status', __('Status'))->icon([
            0 => 'toggle-off',
            1 => 'toggle-on',
        ], $default = '');
        // $grid->column('banner', __('Banner'));
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
        $show = new Show(YouCanDo::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('status', __('Status'));
        $show->field('banner', __('Banner'));
        $show->field('created_at', __('Created at'));
        $show->field('alt', __('Alt'));
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
        $form = new Form(new YouCanDo());

        $form->switch('status', __('Status'));
        $form->image('banner', __('Banner'))->uniqueName()->downloadable()->move('you_can_do');
        $form->text('alt', __('Alt'));

        return $form;
    }
}

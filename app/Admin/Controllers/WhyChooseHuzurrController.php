<?php

namespace App\Admin\Controllers;

use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use \App\Models\WhyChooseHuzurr;
use Carbon\Carbon;

class WhyChooseHuzurrController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'WhyChooseHuzurr';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new WhyChooseHuzurr());

        $grid->column('id', __('Id'));
        $grid->column('process', __('Process'));
        $grid->column('process_image', __('Process image'))->image('', 50, 50);
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
        $show = new Show(WhyChooseHuzurr::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('process', __('Process'));
        $show->field('process_image', __('Process image'));
        $show->field('market_model', __('Market model'));
        $show->field('huzurr_model', __('Huzurr model'));
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
        $form = new Form(new WhyChooseHuzurr());

        $form->text('process', __('Process'));
        $form->image('process_image', __('Process Image'))->uniqueName()->downloadable()->move('why_choose');
        $form->ckeditor('market_model', __('Market Model'));
        $form->ckeditor('huzurr_model', __('Huzurr Model'));

        return $form;
    }
}

<?php

namespace App\Admin\Controllers;

use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use \App\Models\BulkOrder;
use Carbon\Carbon;

class BulkOrderController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'BulkOrder';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new BulkOrder());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('email', __('Email'));
        $grid->column('mobile', __('Mobile'));
        $grid->column('order_quantity', __('Order quantity'));
        $grid->column('country', __('Country'));
        $grid->column('material', __('Material'));
        $grid->column('attached_image', __('Attached image'));
        $grid->column('special_details', __('Special details'));
        $grid->column('status', __('Status'))->editable('select', [0 => 'Create', 1 => 'Shiped', 2 => 'Deliver', 3 => 'Cancel']);
        $grid->column('created_at', __('Date'))->display(function($date) {
            return Carbon::parse($date)->format(config('huzurr.datetime_format'));
        });

        $grid->filter(function($filter) {
            $filter->disableIdFilter();
            $filter->equal('status')->radio([0 => 'Create', 1 => 'Shiped', 2 => 'Deliver', 3 => 'Cancel']);
        });

        // $grid->disableActions();
        // $grid->disableCreation();

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
        $show = new Show(BulkOrder::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('email', __('Email'));
        $show->field('mobile', __('Mobile'));
        $show->field('order_quantity', __('Order quantity'));
        $show->field('country', __('Country'));
        $show->field('material', __('Material'));
        $show->field('attached_image', __('Attached image'));
        $show->field('special_details', __('Special details'));
        $show->field('status', __('Status'));
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
        $form = new Form(new BulkOrder());

        $form->text('name', __('Name'));
        $form->email('email', __('Email'));
        $form->mobile('mobile', __('Mobile'));
        $form->text('order_quantity', __('Order quantity'));
        $form->text('country', __('Country'));
        $form->text('material', __('Material'));
        $form->text('attached_image', __('Attached image'));
        $form->text('special_details', __('Special details'));
        $form->select('status', __('Status'))->options([0 => 'Create', 1 => 'Shiped', 2 => 'Deliver', 3 => 'Cancel']);

        return $form;
    }
}

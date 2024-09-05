<?php

namespace App\Admin\Controllers;

use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Models\Order;
use Carbon\Carbon;

class OrderController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Order';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Order());

        $grid->column('id', __('Id'));
        $grid->column('product.name', __('Product'));
        // $grid->column('user.name', __('User'));
        $grid->column('order_id', __('Order Id'));
        $grid->column('metal_type', __('Metal Type'));
        $grid->column('ring_size', __('Ring Size'));
        $grid->column('order_status', __('Order Status'))->editable('select', [0 => 'Pending', 1 => 'Shiped', 2 => 'Deliver', 3 => 'Cancel']);
        $grid->column('payment_method', __('Payment Method'));
        $grid->column('delivery_status', __('Delivery Status'))->editable('select', [0 => 'Pending', 1 => 'Completed']);
        $grid->column('first_name', __('First Name'));
        $grid->column('last_name', __('Last Name'));
        $grid->column('email', __('Email'));
        $grid->column('phone_no', __('Mobile'));
        $grid->column('pincode', __('Pincode'));
        $grid->column('city', __('City'));
        $grid->column('state', __('State'));
        $grid->column('address', __('Address'));
        $grid->column('created_at', __('Date'))->display(function($date) {
            return Carbon::parse($date)->format(config('huzurr.datetime_format'));
        });

        // $grid->actions(function($action) {
        //     $action->disableView();
        // });

        $grid->filter(function($filter) {
            $filter->disableIdFilter();
            $filter->equal('order_status')->radio([0 => 'Pending', 1 => 'Shiped', 2 => 'Deliver', 3 => 'Cancel']);
        });

        $grid->disableActions();
        $grid->disableCreation();

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
        $show = new Show(Order::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('product_id', __('Product id'));
        $show->field('user_id', __('User id'));
        $show->field('order_id', __('Order id'));
        $show->field('metal_type', __('Metal type'));
        $show->field('ring_size', __('Ring size'));
        $show->field('order_status', __('Order Status'));
        $show->field('payment_method', __('Payment Method'));
        $show->field('delivery_status', __('Delivery Status'));
        $show->field('first_name', __('First name'));
        $show->field('last_name', __('Last name'));
        $show->field('email', __('Email'));
        $show->field('phone_no', __('Phone no'));
        $show->field('pincode', __('Pincode'));
        $show->field('city', __('City'));
        $show->field('state', __('State'));
        $show->field('address', __('Address'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('deleted_at', __('Deleted at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Order());

        $form->number('product_id', __('Product id'));
        $form->number('user_id', __('User id'));
        $form->text('order_id', __('Order id'));
        $form->text('metal_type', __('Metal type'));
        $form->decimal('ring_size', __('Ring size'));
        $form->select('order_status', __('Order status'))->options([0 => 'Pending', 1 => 'Shiped', 2 => 'Deliver', 3 => 'Cancel']);
        $form->text('payment_method', __('Payment method'));
        $form->select('delivery_status', __('Delivery status'))->options([0 => 'Pending', 1 => 'Completed']);
        $form->text('first_name', __('First name'));
        $form->text('last_name', __('Last name'));
        $form->email('email', __('Email'));
        $form->number('phone_no', __('Phone no'));
        $form->number('pincode', __('Pincode'));
        $form->text('city', __('City'));
        $form->text('state', __('State'));
        $form->text('address', __('Address'));

        return $form;
    }
}

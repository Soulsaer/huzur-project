<?php

namespace App\Admin\Controllers;

use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use \App\Models\Gellery;

class GelleryController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Gellery';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Gellery());

        $grid->column('id', __('Id'));
        $grid->column('image', __('Image'))->image('', 100, 100);
        $grid->column('status', __('Status'))->icon([
            0 => 'toggle-off',
            1 => 'toggle-on',
        ], $default = '');
        $grid->column('link', __('Link'));

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
        $show = new Show(Gellery::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('image', __('Image'));
        $show->field('status', __('Status'));
        $show->field('link', __('Link'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('alt', __('Alt'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Gellery());

        $form->image('image', __('Image'))->uniqueName()->downloadable()->move('gellary_image');
        $form->switch('status', __('Status'));
        $form->url('link', __('Link'));
        $form->text('alt', __('Alt'));

        return $form;
    }
}

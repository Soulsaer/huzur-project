<?php

namespace App\Admin\Controllers;

use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Models\Slider;
use Carbon\Carbon;

class SliderController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Sliders';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Slider());

        $grid->column('id', __('Id'));
        $grid->column('slider_image', __('Image'))->image('', 100, 50);
        $grid->column('status', __('Status'))->icon([
            0 => 'toggle-off',
            1 => 'toggle-on',
        ], $default = '');
        $grid->column('media_type', __('Media type'));
        $grid->column('link', __('Link'));
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
        $show = new Show(Slider::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('slider_image', __('Slider image'));
        $show->field('status', __('Status'));
        $show->field('media_type', __('Media type'));
        $show->field('link', __('Link'));
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
        $form = new Form(new Slider());

        $form->file('slider_image', __('Slider'))->uniqueName()->downloadable()->move('sliders');
        $form->switch('status', __('Status'));
        $form->select('media_type', __('Media Type'))->options(['image' => 'Image', 'video' => 'Video']);
        $form->text('alt_tag', __('Alt Tag'));
        $form->url('link', __('Link'));

        return $form;
    }
}

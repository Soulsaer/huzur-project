<?php

namespace App\Admin\Controllers;

use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Models\TblMetaInfo;
use Carbon\Carbon;

class PageController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Pages';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new TblMetaInfo());

        $grid->column('id', __('Id'));
        $grid->column('pagename', __('Pagename'));
        $grid->column('title', __('Title'));
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
        $show = new Show(TblMetaInfo::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('pagename', __('Pagename'));
        $show->field('title', __('Title'));
        $show->field('slug', __('Slug'));
        $show->field('keyword', __('Keyword'));
        $show->field('description', __('Description'));
        $show->field('other_meta', __('Other meta'));
        $show->field('content', __('Content'));
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
        $form = new Form(new TblMetaInfo());

        $form->text('pagename', __('Pagename'));
        $form->text('title', __('Title'));
        $form->text('slug', __('Slug'));
        $form->text('keyword', __('Keyword'));
        $form->textarea('description', __('Description'));
        $form->textarea('other_meta', __('Other meta'));
        $form->ckeditor('content', __('Content'));

        return $form;
    }
}

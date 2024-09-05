<?php

namespace App\Admin\Controllers;

use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Models\ProcessCustomizeJewelry;
use Encore\Admin\Layout\Content;

class ProcessCustomizeJewelryController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Process Customize Jewelry';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */

    protected function grid()
    {
        $grid = new Grid(new ProcessCustomizeJewelry());

        $grid->column('id', __('Id'));
        $grid->column('tbl_meta_info_id', __('Tbl meta info id'));
        $grid->column('title', __('Title'));
        $grid->column('tag_line', __('Tag line'));
        $grid->column('section_1_image', __('Section 1 image'));
        $grid->column('section_1_image_alt', __('Section 1 image alt'));
        $grid->column('section_1_title', __('Section 1 title'));
        $grid->column('section_1_content', __('Section 1 content'));
        $grid->column('section_2_image', __('Section 2 image'));
        $grid->column('section_2_image_alt', __('Section 2 image alt'));
        $grid->column('section_2_title', __('Section 2 title'));
        $grid->column('section_2_content', __('Section 2 content'));
        $grid->column('section_3_image', __('Section 3 image'));
        $grid->column('section_3_image_alt', __('Section 3 image alt'));
        $grid->column('section_3_title', __('Section 3 title'));
        $grid->column('section_3_content', __('Section 3 content'));
        $grid->column('section_4_image', __('Section 4 image'));
        $grid->column('section_4_image_alt', __('Section 4 image alt'));
        $grid->column('section_4_title', __('Section 4 title'));
        $grid->column('section_4_content', __('Section 4 content'));
        $grid->column('section_5_image', __('Section 5 image'));
        $grid->column('section_5_image_alt', __('Section 5 image alt'));
        $grid->column('section_5_title', __('Section 5 title'));
        $grid->column('section_5_content', __('Section 5 content'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(ProcessCustomizeJewelry::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('tbl_meta_info_id', __('Tbl meta info id'));
        $show->field('title', __('Title'));
        $show->field('tag_line', __('Tag line'));
        $show->field('section_1_image', __('Section 1 image'));
        $show->field('section_1_image_alt', __('Section 1 image alt'));
        $show->field('section_1_title', __('Section 1 title'));
        $show->field('section_1_content', __('Section 1 content'));
        $show->field('section_2_image', __('Section 2 image'));
        $show->field('section_2_image_alt', __('Section 2 image alt'));
        $show->field('section_2_title', __('Section 2 title'));
        $show->field('section_2_content', __('Section 2 content'));
        $show->field('section_3_image', __('Section 3 image'));
        $show->field('section_3_image_alt', __('Section 3 image alt'));
        $show->field('section_3_title', __('Section 3 title'));
        $show->field('section_3_content', __('Section 3 content'));
        $show->field('section_4_image', __('Section 4 image'));
        $show->field('section_4_image_alt', __('Section 4 image alt'));
        $show->field('section_4_title', __('Section 4 title'));
        $show->field('section_4_content', __('Section 4 content'));
        $show->field('section_5_image', __('Section 5 image'));
        $show->field('section_5_image_alt', __('Section 5 image alt'));
        $show->field('section_5_title', __('Section 5 title'));
        $show->field('section_5_content', __('Section 5 content'));
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
        $form = new Form(new ProcessCustomizeJewelry());

        // $form->number('tbl_meta_info_id', __('Tbl meta info id'));
        $form->text('title', __('Title'));
        $form->text('tag_line', __('Tag Line'));
        $form->image('section_1_image', __('Section 1 Image'))->uniqueName()->downloadable()->move('customize');
        $form->text('section_1_image_alt', __('Section 1 Image Alt'));
        $form->text('section_1_title', __('Section 1 Title'));
        $form->ckeditor('section_1_content', __('Section 1 Content'));
        $form->image('section_2_image', __('Section 2 Image'))->uniqueName()->downloadable()->move('customize');
        $form->text('section_2_image_alt', __('Section 2 Image Alt'));
        $form->text('section_2_title', __('Section 2 Title'));
        $form->ckeditor('section_2_content', __('Section 2 Content'));
        $form->image('section_3_image', __('Section 3 Image'))->uniqueName()->downloadable()->move('customize');
        $form->text('section_3_image_alt', __('Section 3 Image Alt'));
        $form->text('section_3_title', __('Section 3 Title'));
        $form->ckeditor('section_3_content', __('Section 3 Content'));
        $form->image('section_4_image', __('Section 4 Image'))->uniqueName()->downloadable()->move('customize');
        $form->text('section_4_image_alt', __('Section 4 Image Alt'));
        $form->text('section_4_title', __('Section 4 Title'));
        $form->ckeditor('section_4_content', __('Section 4 Content'));
        $form->image('section_5_image', __('Section 5 Image'))->uniqueName()->downloadable()->move('customize');
        $form->text('section_5_image_alt', __('Section 5 Image Alt'));
        $form->text('section_5_title', __('Section 5 Title'));
        $form->ckeditor('section_5_content', __('Section 5 Content'));

        $form->tools(function (Form\Tools $tools) {
            $tools->disableDelete();
            $tools->disableView();
            $tools->disableList();
        });

        $form->saved(function (Form $form) {
            // redirect url
            return redirect('/admin/process-customize-jewelries/1/edit');

        });

        return $form;
    }
}

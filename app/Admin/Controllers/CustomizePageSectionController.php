<?php

namespace App\Admin\Controllers;

use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use \App\Models\CustomizePageSection;

class CustomizePageSectionController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Customize Page Section';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new CustomizePageSection());

        $grid->column('id', __('Id'));
        $grid->column('page_name', __('Page name'));
        $grid->column('team_section_title', __('Team section title'));
        $grid->column('team_section_tag_line', __('Team section tag line'));
        $grid->column('workshop_section_title', __('Workshop section title'));
        $grid->column('workshop_section_tag_line', __('Workshop section tag line'));
        $grid->column('mto_section_title', __('Mto section title'));
        $grid->column('mto_section_tag_line', __('Mto section tag line'));
        $grid->column('mto_section_image', __('Mto section image'));
        $grid->column('mto_section_sub_title', __('Mto section sub title'));
        $grid->column('mto_section_sub_tag_line', __('Mto section sub tag line'));
        $grid->column('mto_section_btn_title', __('Mto section btn title'));
        $grid->column('mto_section_btn_link', __('Mto section btn link'));
        $grid->column('brjs_section_title', __('Brjs section title'));
        $grid->column('brjs_section_content', __('Brjs section content'));
        $grid->column('brjs_section_images', __('Brjs section images'));
        $grid->column('mto_section_1__images', __('Mto section 1  images'));
        $grid->column('mto_section_2__images', __('Mto section 2  images'));
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
        $show = new Show(CustomizePageSection::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('page_name', __('Page name'));
        $show->field('team_section_title', __('Team section title'));
        $show->field('team_section_tag_line', __('Team section tag line'));
        $show->field('workshop_section_title', __('Workshop section title'));
        $show->field('workshop_section_tag_line', __('Workshop section tag line'));
        $show->field('mto_section_title', __('Mto section title'));
        $show->field('mto_section_tag_line', __('Mto section tag line'));
        $show->field('mto_section_image', __('Mto section image'));
        $show->field('mto_section_sub_title', __('Mto section sub title'));
        $show->field('mto_section_sub_tag_line', __('Mto section sub tag line'));
        $show->field('mto_section_btn_title', __('Mto section btn title'));
        $show->field('mto_section_btn_link', __('Mto section btn link'));
        $show->field('brjs_section_title', __('Brjs section title'));
        $show->field('brjs_section_content', __('Brjs section content'));
        $show->field('brjs_section_images', __('Brjs section images'));
        $show->field('mto_section_1__images', __('Mto section 1  images'));
        $show->field('mto_section_2__images', __('Mto section 2  images'));
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
        $form = new Form(new CustomizePageSection());

        $form->text('page_name', __('Page name'));

        $form->tab('Team Section', function (Form $form) {
            $form->text('team_section_title', __('Title'));
            $form->text('team_section_tag_line', __('Tag Line'));
        });

        $form->tab('Workshop Section', function (Form $form) {
            $form->text('workshop_section_title', __('Title'));
            $form->text('workshop_section_tag_line', __('Tag Line'));
        });

        $form->tab('Customized Jewelry Made To Order Section', function (Form $form) {
            $form->text('mto_section_title', __('Title'));
            $form->text('mto_section_tag_line', __('Tag Line'));
            $form->image('mto_section_image', __('Image'));
            $form->text('mto_section_sub_title', __('Sub Title'));
            $form->text('mto_section_sub_tag_line', __('Sub Tag Line'));
            $form->text('mto_section_btn_title', __('Button Title'));
            $form->text('mto_section_btn_link', __('Button Link'));
        });

        $form->tab('Best Rated Jewelry Store Section', function (Form $form) {
            $form->text('brjs_section_title', __('Title'));
            $form->ckeditor('brjs_section_content', __('Content'));
            $form->multipleImage('brjs_section_images', __('Images'))->uniqueName()->downloadable()->move('customize');
            $form->list('brjs_section_images_alt', __('Alt Tag'));
        });

        $form->tab('Custom Made To Order Section', function (Form $form) {
            $form->multipleImage('mto_section_1__images', __('Row 1 Images'))->uniqueName()->downloadable()->move('customize');
            $form->list('mto_section_1__images_alt', __('Alt Tag'));
            $form->multipleImage('mto_section_2__images', __('Row 2 Images'))->uniqueName()->downloadable()->move('customize');
            $form->list('mto_section_2__images_alt', __('Alt Tag'));
        });

        $form->tools(function (Form\Tools $tools) {
            $tools->disableDelete();
            $tools->disableView();
            $tools->disableList();
        });

        $form->saved(function (Form $form) {
            // Show success message
            admin_toastr(__('Form submitted successfully!'), 'success');

            // Redirect after saving
            return redirect('/admin/customize-page-sections/1/edit');
        });

        return $form;
    }

}

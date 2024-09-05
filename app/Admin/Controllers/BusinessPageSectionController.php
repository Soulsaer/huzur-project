<?php

namespace App\Admin\Controllers;

use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use \App\Models\BusinessPageSection;

class BusinessPageSectionController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Business Page Section';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new BusinessPageSection());

        $grid->column('id', __('Id'));
        $grid->column('title', __('Title'));
        $grid->column('banner', __('Banner'));
        $grid->column('bjo_section_title', __('Bjo section title'));
        $grid->column('bjo_section_tag_line', __('Bjo section tag line'));
        $grid->column('bjo_section_image', __('Bjo section image'));
        $grid->column('pbjo_section_title', __('Pbjo section title'));
        $grid->column('pbjo_section_tag_line', __('Pbjo section tag line'));
        $grid->column('pbjo_section_image', __('Pbjo section image'));
        $grid->column('pbjo_section_sub_title', __('Pbjo section sub title'));
        $grid->column('pbjo_section_content', __('Pbjo section content'));
        $grid->column('wjr_section_title', __('Wjr section title'));
        $grid->column('wjr_section_tag_line', __('Wjr section tag line'));
        $grid->column('wjr_section_images', __('Wjr section images'));
        $grid->column('brjs_section_title', __('Brjs section title'));
        $grid->column('brjs_section_content', __('Brjs section content'));
        $grid->column('brjs_section_images', __('Brjs section images'));
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
        $show = new Show(BusinessPageSection::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('banner', __('Banner'));
        $show->field('bjo_section_title', __('Bjo section title'));
        $show->field('bjo_section_tag_line', __('Bjo section tag line'));
        $show->field('bjo_section_image', __('Bjo section image'));
        $show->field('pbjo_section_title', __('Pbjo section title'));
        $show->field('pbjo_section_tag_line', __('Pbjo section tag line'));
        $show->field('pbjo_section_image', __('Pbjo section image'));
        $show->field('pbjo_section_sub_title', __('Pbjo section sub title'));
        $show->field('pbjo_section_content', __('Pbjo section content'));
        $show->field('wjr_section_title', __('Wjr section title'));
        $show->field('wjr_section_tag_line', __('Wjr section tag line'));
        $show->field('wjr_section_images', __('Wjr section images'));
        $show->field('brjs_section_title', __('Brjs section title'));
        $show->field('brjs_section_content', __('Brjs section content'));
        $show->field('brjs_section_images', __('Brjs section images'));
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
        $form = new Form(new BusinessPageSection());

        $form->tab('General Settings', function (Form $form) {
            $form->text('title', __('Title'));
            $form->image('banner', __('Banner'))->uniqueName()->downloadable()->move('business');
        });

        $form->tab('Bulk Jewelry Order Section', function (Form $form) {
            $form->text('bjo_section_title', __('Title'));
            $form->text('bjo_section_tag_line', __('Tag Line'));
            $form->image('bjo_section_image', __('Image'))->uniqueName()->downloadable()->move('business');
        });

        $form->tab('Payment For Bulk Jewelry Order Section', function (Form $form) {
            $form->text('pbjo_section_title', __('Title'));
            $form->text('pbjo_section_tag_line', __('Tag Line'));
            $form->image('pbjo_section_image', __('Image'))->uniqueName()->downloadable()->move('business');
            $form->text('pbjo_section_sub_title', __('Sub Title'));
            $form->ckeditor('pbjo_section_content', __('Content'));
            $form->divider('Section 2');
            $form->image('pbjo_section_2_image', __('Image'))->uniqueName()->downloadable()->move('business');
            $form->text('pbjo_section_2_sub_title', __('Sub Title'));
            $form->ckeditor('pbjo_section_2_content', __('Content'));
        });

        $form->tab('Worldwide Jewelry Resellers Section', function (Form $form) {
            $form->text('wjr_section_title', __('Title'));
            $form->text('wjr_section_tag_line', __('Tag Line'));
            // $form->multipleImage('wjr_section_images', __('Images'))->uniqueName()->downloadable()->move('business');
        });

        $form->tab('Best Rated Jewelry Store Section', function (Form $form) {
            $form->text('brjs_section_title', __('Title'));
            $form->ckeditor('brjs_section_content', __('Content'));
            // $form->multipleImage('brjs_section_images', __('Images'))->uniqueName()->downloadable()->move('business');
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
            return redirect('/admin/business-page-sections/1/edit');
        });

        return $form;
    }

}

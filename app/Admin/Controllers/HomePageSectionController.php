<?php

namespace App\Admin\Controllers;

use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Models\HomePageSection;

class HomePageSectionController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Home Page Sections';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new HomePageSection());

        $grid->column('id', __('Id'));
        $grid->column('mto_section_title', __('Mto section title'));
        $grid->column('mto_section_tag_line', __('Mto section tag line'));
        $grid->column('mto_section_video', __('Mto section video'));
        $grid->column('mto_section_image', __('Mto section image'));
        $grid->column('mto_section_alt', __('Mto section alt'));
        $grid->column('mto_section_sub_title', __('Mto section sub title'));
        $grid->column('mto_section_sub_tag_line', __('Mto section sub tag line'));
        $grid->column('mto_section_btn_title', __('Mto section btn title'));
        $grid->column('mto_section_btn_link', __('Mto section btn link'));


        $grid->column('rlc_section_image_1', __('Rlc section image 1'));
        $grid->column('rlc_section_image_1_alt', __('Rlc section image 1 alt'));
        $grid->column('rlc_section_image_2', __('Rlc section image 2'));
        $grid->column('rlc_section_image_2_alt', __('Rlc section image 2 alt'));
        $grid->column('rlc_section_video', __('Rlc section video'));
        $grid->column('rlc_section_video_alt', __('Rlc section video alt'));
        $grid->column('bjp_section_image_1', __('Bjp section image 1'));
        $grid->column('bjp_section_image_1_alt', __('Bjp section image 1 alt'));
        $grid->column('bjp_section_image_1_title', __('Bjp section image 1 title'));
        $grid->column('bjp_section_image_1_name', __('Bjp section image 1 name'));
        $grid->column('bjp_section_image_1_link', __('Bjp section image 1 link'));
        $grid->column('bjp_section_image_2', __('Bjp section image 2'));
        $grid->column('bjp_section_image_2_alt', __('Bjp section image 2 alt'));
        $grid->column('bjp_section_image_2_title', __('Bjp section image 2 title'));
        $grid->column('bjp_section_image_2_name', __('Bjp section image 2 name'));
        $grid->column('bjp_section_image_2_link', __('Bjp section image 2 link'));
        $grid->column('bjp_section_image_3', __('Bjp section image 3'));
        $grid->column('bjp_section_image_3_alt', __('Bjp section image 3 alt'));
        $grid->column('bjp_section_image_3_title', __('Bjp section image 3 title'));
        $grid->column('bjp_section_image_3_name', __('Bjp section image 3 name'));
        $grid->column('bjp_section_image_3_link', __('Bjp section image 3 link'));
        $grid->column('bwu_section_title', __('Bwu section title'));
        $grid->column('bwu_section_content', __('Bwu section content'));
        $grid->column('bwu_section_btn_link', __('Bwu section btn link'));
        $grid->column('bwu_section_image_1', __('Bwu section image 1'));
        $grid->column('bwu_section_image_1_alt', __('Bwu section image 1 alt'));
        $grid->column('bwu_section_image_2', __('Bwu section image 2'));
        $grid->column('bwu_section_image_2_alt', __('Bwu section image 2 alt'));
        $grid->column('bwu_section_image_3', __('Bwu section image 3'));
        $grid->column('bwu_section_image_3_alt', __('Bwu section image 3 alt'));
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
        $show = new Show(HomePageSection::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('mto_section_title', __('Mto section title'));
        $show->field('mto_section_tag_line', __('Mto section tag line'));
        $show->field('mto_section_video', __('Mto section video'));
        $show->field('mto_section_image', __('Mto section image'));
        $show->field('mto_section_alt', __('Mto section alt'));
        $show->field('mto_section_sub_title', __('Mto section sub title'));
        $show->field('mto_section_sub_tag_line', __('Mto section sub tag line'));
        $show->field('mto_section_btn_title', __('Mto section btn title'));
        $show->field('mto_section_btn_link', __('Mto section btn link'));
        $show->field('rlc_section_image_1', __('Rlc section image 1'));
        $show->field('rlc_section_image_1_alt', __('Rlc section image 1 alt'));
        $show->field('rlc_section_image_2', __('Rlc section image 2'));
        $show->field('rlc_section_image_2_alt', __('Rlc section image 2 alt'));
        $show->field('rlc_section_video', __('Rlc section video'));
        $show->field('rlc_section_video_alt', __('Rlc section video alt'));
        $show->field('bjp_section_image_1', __('Bjp section image 1'));
        $show->field('bjp_section_image_1_alt', __('Bjp section image 1 alt'));
        $show->field('bjp_section_image_1_title', __('Bjp section image 1 title'));
        $show->field('bjp_section_image_1_name', __('Bjp section image 1 name'));
        $show->field('bjp_section_image_1_link', __('Bjp section image 1 link'));
        $show->field('bjp_section_image_2', __('Bjp section image 2'));
        $show->field('bjp_section_image_2_alt', __('Bjp section image 2 alt'));
        $show->field('bjp_section_image_2_title', __('Bjp section image 2 title'));
        $show->field('bjp_section_image_2_name', __('Bjp section image 2 name'));
        $show->field('bjp_section_image_2_link', __('Bjp section image 2 link'));
        $show->field('bjp_section_image_3', __('Bjp section image 3'));
        $show->field('bjp_section_image_3_alt', __('Bjp section image 3 alt'));
        $show->field('bjp_section_image_3_title', __('Bjp section image 3 title'));
        $show->field('bjp_section_image_3_name', __('Bjp section image 3 name'));
        $show->field('bjp_section_image_3_link', __('Bjp section image 3 link'));
        $show->field('bwu_section_title', __('Bwu section title'));
        $show->field('bwu_section_content', __('Bwu section content'));
        $show->field('bwu_section_btn_link', __('Bwu section btn link'));
        $show->field('bwu_section_image_1', __('Bwu section image 1'));
        $show->field('bwu_section_image_1_alt', __('Bwu section image 1 alt'));
        $show->field('bwu_section_image_2', __('Bwu section image 2'));
        $show->field('bwu_section_image_2_alt', __('Bwu section image 2 alt'));
        $show->field('bwu_section_image_3', __('Bwu section image 3'));
        $show->field('bwu_section_image_3_alt', __('Bwu section image 3 alt'));
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
        $form = new Form(new HomePageSection());

        $form->text('page_name', __('Page Name'));

        $form->tab('Customized Jewelry "Made To Order"', function (Form $form) {
            $form->text('mto_section_title', __('Title'));
            $form->text('mto_section_tag_line', __('Tag Line'));
            $form->file('mto_section_video', __('Video'))->uniqueName()->downloadable()->move('home_image');
            $form->image('mto_section_image', __('Image'))->uniqueName()->downloadable()->move('home_image');
            $form->text('mto_section_alt', __('Alt'));
            $form->text('mto_section_sub_title', __('Sub Title'));
            $form->text('mto_section_sub_tag_line', __('Sub Tag Line'));
            $form->text('mto_section_btn_title', __('Button Title'));
            $form->text('mto_section_btn_link', __('Button Link'));
        });

        $form->tab('Remarkable Love Collection', function (Form $form) {
            $form->text('rlc_section_title', __('Title'));
            $form->text('rlc_section_tag_line', __('Tag Line'));

            $form->text('rlc_section_image_1_title', __('Image 1 Title'));
            $form->text('rlc_section_image_1_link', __('Image 1 Link'));
            $form->image('rlc_section_image_1', __('Image 1'))->uniqueName()->downloadable()->move('home_image');
            $form->text('rlc_section_image_1_alt', __('Image 1 Alt'));

            $form->text('rlc_section_image_2_title', __('Image 2 Title'));
            $form->text('rlc_section_image_2_link', __('Image 2 Link'));
            $form->image('rlc_section_image_2', __('Image 2'))->uniqueName()->downloadable()->move('home_image');
            $form->text('rlc_section_image_2_alt', __('Image 2 Alt'));

            $form->text('rlc_section_video_title', __('Video Title'));
            $form->text('rlc_section_video_link', __('Video Link'));
            $form->file('rlc_section_video', __('Video'))->uniqueName()->downloadable()->move('home_image');
            $form->text('rlc_section_video_alt', __('Video alt'));
        });

        $form->tab('Birthstone Jewelry With Pride', function (Form $form) {
            $form->text('bjp_section_title', __('Title'));
            $form->text('bjp_section_tag_line', __('Tag Line'));

            $form->image('bjp_section_image_1', __('Image 1'))->uniqueName()->downloadable()->move('home_image');
            $form->text('bjp_section_image_1_alt', __('Image 1 Alt'));
            $form->text('bjp_section_image_1_title', __('Image 1 Title'));
            $form->text('bjp_section_image_1_name', __('Image 1 Name'));
            $form->text('bjp_section_image_1_link', __('Image 1 Link'));

            $form->image('bjp_section_image_2', __('Image 2'))->uniqueName()->downloadable()->move('home_image');
            $form->text('bjp_section_image_2_alt', __('Image 2 Alt'));
            $form->text('bjp_section_image_2_title', __('Image 2 Title'));
            $form->text('bjp_section_image_2_name', __('Image 2 Name'));
            $form->text('bjp_section_image_2_link', __('Image 2 Link'));

            $form->image('bjp_section_image_3', __('Image 3'))->uniqueName()->downloadable()->move('home_image');
            $form->text('bjp_section_image_3_alt', __('Image 3 Alt'));
            $form->text('bjp_section_image_3_title', __('Image 3 Title'));
            $form->text('bjp_section_image_3_name', __('Image 3 Name'));
            $form->text('bjp_section_image_3_link', __('Image 3 Link'));
        });

        $form->tab('Business With Us', function (Form $form) {
            $form->text('bwu_section_title', __('Title'));
            $form->text('bwu_section_sub_title', __('Sub Title'));
            $form->ckeditor('bwu_section_content', __('Content'));
            $form->text('bwu_section_btn_name', __('Button Name'));
            $form->text('bwu_section_btn_link', __('Button Link'));

            $form->image('bwu_section_image_1', __('Image 1'))->uniqueName()->downloadable()->move('home_image');
            $form->text('bwu_section_image_1_alt', __('Image 1 Alt'));
            $form->image('bwu_section_image_2', __('Image 2'))->uniqueName()->downloadable()->move('home_image');
            $form->text('bwu_section_image_2_alt', __('Image 2 Alt'));
            $form->image('bwu_section_image_3', __('Image 3'))->uniqueName()->downloadable()->move('home_image');
            $form->text('bwu_section_image_3_alt', __('Image 3 Alt'));
            $form->image('bwu_section_image_4', __('Image 4'))->uniqueName()->downloadable()->move('home_image');
            $form->text('bwu_section_image_4_alt', __('Image 4 Alt'));
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
            return redirect('/admin/home-page-sections/1/edit');
        });


        // $form->saved(function (Form $form) {
        //     try {
        //         admin_toastr(__('Form submitted successfully!'), 'success');
        //         // You can add any additional logic here if needed
                
        //         // Redirect with a success message
        //         return redirect('/admin/home-page-sections/1/edit')
        //             ->with('success', __('Form successfully saved.'));
        //     } catch (\Exception $e) {
        //         // Redirect with an error message
        //         admin_toastr(__('Form submitted successfully!'), 'error');
        //         return redirect()->back()
        //             ->with('error', __('An error occurred: ' . $e->getMessage()));
        //     }
        // });

        return $form;
    }

}

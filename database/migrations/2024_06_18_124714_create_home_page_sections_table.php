<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_page_sections', function (Blueprint $table) {
            $table->id();
            $table->string('mto_section_title', 150)->nullable();
            $table->string('mto_section_tag_line', 255)->nullable();
            $table->string('mto_section_video', 150)->nullable();
            $table->string('mto_section_image', 150)->nullable();
            $table->string('mto_section_alt', 150)->nullable();
            $table->string('mto_section_sub_title', 150)->nullable();
            $table->string('mto_section_sub_tag_line', 255)->nullable();
            $table->string('mto_section_btn_title', 100)->nullable();
            $table->string('mto_section_btn_link', 100)->nullable();

            $table->string('rlc_section_image_1', 150)->nullable();
            $table->string('rlc_section_image_1_alt', 150)->nullable();
            $table->string('rlc_section_image_2', 150)->nullable();
            $table->string('rlc_section_image_2_alt', 150)->nullable();
            $table->string('rlc_section_video', 150)->nullable();
            $table->string('rlc_section_video_alt', 150)->nullable();

            $table->string('bjp_section_image_1', 150)->nullable();
            $table->string('bjp_section_image_1_alt', 150)->nullable();
            $table->string('bjp_section_image_1_title', 150)->nullable();
            $table->string('bjp_section_image_1_name', 150)->nullable();
            $table->string('bjp_section_image_1_link', 150)->nullable();

            $table->string('bjp_section_image_2', 150)->nullable();
            $table->string('bjp_section_image_2_alt', 150)->nullable();
            $table->string('bjp_section_image_2_title', 150)->nullable();
            $table->string('bjp_section_image_2_name', 150)->nullable();
            $table->string('bjp_section_image_2_link', 150)->nullable();

            $table->string('bjp_section_image_3', 150)->nullable();
            $table->string('bjp_section_image_3_alt', 150)->nullable();
            $table->string('bjp_section_image_3_title', 150)->nullable();
            $table->string('bjp_section_image_3_name', 150)->nullable();
            $table->string('bjp_section_image_3_link', 150)->nullable();

            $table->string('bwu_section_title', 150)->nullable();
            $table->text('bwu_section_content')->nullable();
            $table->string('bwu_section_btn_link', 150)->nullable();
            $table->string('bwu_section_image_1', 150)->nullable();
            $table->string('bwu_section_image_1_alt', 150)->nullable();
            $table->string('bwu_section_image_2', 150)->nullable();
            $table->string('bwu_section_image_2_alt', 150)->nullable();
            $table->string('bwu_section_image_3', 150)->nullable();
            $table->string('bwu_section_image_3_alt', 150)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('home_page_sections');
    }
};

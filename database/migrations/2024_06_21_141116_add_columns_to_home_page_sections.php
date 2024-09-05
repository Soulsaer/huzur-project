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
        Schema::table('home_page_sections', function (Blueprint $table) {
            $table->string('page_name', 150);
            $table->string('rlc_section_title', 150)->nullable();
            $table->string('rlc_section_tag_line', 150)->nullable();
            $table->string('bjp_section_title', 150)->nullable();
            $table->string('bjp_section_tag_line', 150)->nullable();
            $table->string('rlc_section_image_1_title', 150)->nullable();
            $table->string('rlc_section_image_1_link', 150)->nullable();
            $table->string('rlc_section_image_2_title', 150)->nullable();
            $table->string('rlc_section_image_2_link', 150)->nullable();
            $table->string('rlc_section_video_title', 150)->nullable();
            $table->string('rlc_section_video_link', 150)->nullable();
            $table->string('bwu_section_sub_title', 150)->nullable();
            $table->string('bwu_section_btn_name', 150)->nullable();
            $table->string('bwu_section_image_4', 150)->nullable();
            $table->string('bwu_section_image_4_alt', 150)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('home_page_sections', function (Blueprint $table) {
            //
        });
    }
};

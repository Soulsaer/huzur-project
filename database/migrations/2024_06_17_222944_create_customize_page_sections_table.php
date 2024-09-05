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
        Schema::create('customize_page_sections', function (Blueprint $table) {
            $table->id();
            $table->string('page_name', 150);
            $table->string('team_section_title', 150)->nullable();
            $table->string('team_section_tag_line', 255)->nullable();
            $table->string('workshop_section_title', 150)->nullable();
            $table->string('workshop_section_tag_line', 255)->nullable();
            $table->string('mto_section_title', 150)->nullable();
            $table->string('mto_section_tag_line', 255)->nullable();
            $table->string('mto_section_image', 150)->nullable();
            $table->string('mto_section_sub_title', 150)->nullable();
            $table->string('mto_section_sub_tag_line', 255)->nullable();
            $table->string('mto_section_btn_title', 100)->nullable();
            $table->string('mto_section_btn_link', 100)->nullable();
            $table->string('brjs_section_title', 150)->nullable();
            $table->text('brjs_section_content')->nullable();
            $table->json('brjs_section_images')->nullable();
            $table->json('mto_section_1__images')->nullable();
            $table->json('mto_section_2__images')->nullable();
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
        Schema::dropIfExists('customize_page_sections');
    }
};

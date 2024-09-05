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
        Schema::create('business_page_sections', function (Blueprint $table) {
            $table->id();
            $table->string('title', 150);
            $table->string('banner', 150)->nullable();
            $table->string('bjo_section_title', 150)->nullable();
            $table->string('bjo_section_tag_line', 255)->nullable();
            $table->string('bjo_section_image', 150)->nullable();
            $table->string('pbjo_section_title', 150)->nullable();
            $table->string('pbjo_section_tag_line', 255)->nullable();
            $table->string('pbjo_section_image', 150)->nullable();
            $table->string('pbjo_section_sub_title', 255)->nullable();
            $table->string('pbjo_section_content', 150)->nullable();

            $table->string('wjr_section_title', 150)->nullable();
            $table->string('wjr_section_tag_line', 255)->nullable();
            $table->json('wjr_section_images')->nullable();

            $table->string('brjs_section_title', 150)->nullable();
            $table->text('brjs_section_content')->nullable();
            $table->json('brjs_section_images')->nullable();
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
        Schema::dropIfExists('business_page_sections');
    }
};

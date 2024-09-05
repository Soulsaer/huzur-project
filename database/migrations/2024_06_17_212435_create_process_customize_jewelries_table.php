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
        Schema::create('process_customize_jewelries', function (Blueprint $table) {
            $table->id();
            $table->unsignedSmallInteger('tbl_meta_info_id');
            $table->string('title', 150);
            $table->string('tag_line', 250)->nullable();

            $table->string('section_1_image', 150)->nullable();
            $table->string('section_1_image_alt', 250)->nullable();
            $table->string('section_1_title', 200)->nullable();
            $table->text('section_1_content')->nullable();

            $table->string('section_2_image', 150)->nullable();
            $table->string('section_2_image_alt', 250)->nullable();
            $table->string('section_2_title', 200)->nullable();
            $table->text('section_2_content')->nullable();

            $table->string('section_3_image', 150)->nullable();
            $table->string('section_3_image_alt', 250)->nullable();
            $table->string('section_3_title', 200)->nullable();
            $table->text('section_3_content')->nullable();

            $table->string('section_4_image', 150)->nullable();
            $table->string('section_4_image_alt', 250)->nullable();
            $table->string('section_4_title', 200)->nullable();
            $table->text('section_4_content')->nullable();

            $table->string('section_5_image', 150)->nullable();
            $table->string('section_5_image_alt', 250)->nullable();
            $table->string('section_5_title', 200)->nullable();
            $table->text('section_5_content')->nullable();

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
        Schema::dropIfExists('process_customize_jewelries');
    }
};

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
        Schema::table('customize_page_sections', function (Blueprint $table) {
            $table->json('brjs_section_images_alt')->nullable();
            $table->json('mto_section_1__images_alt')->nullable();
            $table->json('mto_section_2__images_alt')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('customize_page_sections', function (Blueprint $table) {
            //
        });
    }
};

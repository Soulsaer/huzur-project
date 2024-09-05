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
        Schema::create('customize_made_to_orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedSmallInteger('tbl_meta_info_id');
            $table->string('title', 150);
            $table->string('tag_line', 250)->nullable();
            $table->json('section_1_images')->nullable();
            $table->json('section_2_images')->nullable();
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
        Schema::dropIfExists('customize_made_to_orders');
    }
};

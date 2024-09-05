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
        Schema::table('business_page_sections', function (Blueprint $table) {
            $table->string('pbjo_section_2_image', 150)->nullable();
            $table->string('pbjo_section_2_sub_title', 255)->nullable();
            $table->text('pbjo_section_2_content')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('business_page_sections', function (Blueprint $table) {
            $table->dropColumn('pbjo_section_2_image');
            $table->dropColumn('pbjo_section_2_sub_title');
            $table->dropColumn('pbjo_section_2_content');
        });
    }
};

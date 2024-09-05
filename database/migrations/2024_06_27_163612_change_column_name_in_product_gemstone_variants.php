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
        Schema::table('product_gemstone_variants', function (Blueprint $table) {
            $table->renameColumn('metal_gemstone_id', 'gemstone_variant_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product_gemstone_variants', function (Blueprint $table) {
            $table->renameColumn('gemstone_variant_id', 'metal_gemstone_id');
        });
    }
};

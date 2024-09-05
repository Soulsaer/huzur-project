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
        Schema::create('worldwide_resellers', function (Blueprint $table) {
            $table->id();
            $table->string('country_name', 100);
            $table->string('reseller_name', 200)->nullable();
            $table->string('image', 150)->nullable();
            $table->string('mobile', 20)->nullable();
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
        Schema::dropIfExists('worldwide_resellers');
    }
};

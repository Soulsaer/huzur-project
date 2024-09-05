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
        Schema::create('why_choose_huzurrs', function (Blueprint $table) {
            $table->id();
            $table->string('process', 100);
            $table->string('process_image', 150)->nullable();
            $table->text('market_model')->nullable();
            $table->text('huzurr_model')->nullable();
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
        Schema::dropIfExists('why_choose_huzurrs');
    }
};

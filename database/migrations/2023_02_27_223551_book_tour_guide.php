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
        Schema::create('book_tour_guide', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tourGuide_id');
        $table->foreign('tourGuide_id')->references('id')->on('tourguides')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('order_id');
        $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade')->onUpdate('cascade');
    });
     }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};

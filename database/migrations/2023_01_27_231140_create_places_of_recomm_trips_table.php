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
        Schema::create('places_of_recomm_trips', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('recommended_trip_id');
            $table->foreign('recommended_trip_id')->references('id')->on('recommended_trips')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('places_of_recomm_trips');
    }
};

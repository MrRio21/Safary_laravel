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
        Schema::create('tourguide_languages', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('language');
            $table->unsignedBigInteger('tourguide_id');
            $table->foreign('tourguide_id')->references('id')->on('tourguides')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tourgide_languages');
    }
};

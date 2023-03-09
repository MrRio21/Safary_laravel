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
            // $table->id();
            $table->timestamps();
            $table->unsignedBigInteger("n_of_days");
            $table->unsignedBigInteger('tourguide_id');
        $table->foreign('tourguide_id')->references('id')->on('tourguides')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('order_id');
        $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade')->onUpdate('cascade');
        $table->primary([ 'order_id','tourguide_id']);
        $table->enum('tourguide_status',['Accept','pending','Reject'])->default('pending');

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

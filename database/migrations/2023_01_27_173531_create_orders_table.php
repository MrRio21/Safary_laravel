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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->float("budget");
            $table->date("check_in");
            $table->date("check_out");
            $table->unsignedBigInteger("n_of_adults");
            $table->unsignedBigInteger("n_of_childeren")->default(0);
            $table->unsignedBigInteger("n_of_rooms");
        });
    }
    // $table->integer("check_in_m");
    // $table->integer("check_in_y");
    // $table->integer("check_out_d");
    // $table->integer("check_out_m");
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};

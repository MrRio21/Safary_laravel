<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\orderController\OrderController;
use App\Http\Controllers\orderController\OrderController;
use App\Http\Controllers\orderController\BookedRoomController;
use App\Http\Controllers\orderController\OrderedPlaceController;
use App\Http\Controllers\orderController\BookTourGuideController;
use App\Http\Controllers\orderController\OrderDetailsController;


Route::post('/deleteOrder/{orderID}',[OrderController::class,'destroy']);


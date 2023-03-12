<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\viewHotelsController;


Route::get('allHotel',[viewHotelsController::class,'index']);

Route::get('Hotel',[viewHotelsController::class,'hotel'])->name('hotel');

Route::get('Room',[viewHotelsController::class,'room']);


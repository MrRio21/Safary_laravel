<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\viewHotelsController;


Route::get('allHotel',[viewHotelsController::class,'index']);

Route::get('Hotel/{id}',[viewHotelsController::class,'hotel'])->name('hotel');

Route::get('Room/{id}',[viewHotelsController::class,'room'])->name('room');

Route::post('/bookRoom', [viewHotelsController::class, 'store'])->name('bookRoom');


<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MUTController;
use App\Http\Controllers\orderController\OrderController;
use App\Http\Controllers\placesController\PlaceController;

Route::get('/MUT',[MUTController::class,'create'])->name("MUT.create")->middleware('auth');
Route::post('/MUTStoringOrder',[OrderController::class,'store'])->name("MUT.store");
Route::get('/availableHotels/{order}',[MUTController::class,'getAvailableHotels'])->name("getAvailableHotels");

// to view the prices of the rooms in specific hotel
Route::post('/availableRooms/{order}/{hotel}',[MUTController::class,'getAvailableRooms'])->name("getAvailableRooms");
Route::post('/BookInHotel/{order}/{hotel}',[MUTController::class,'BookInHotel'])->name("BookInHotel");

Route::post('/availablePlaces/{order}',[MUTController::class,'getAvailableRooms'])->name("getAvailablePlaces");
Route::get('/availablePlaces/{order}',[MUTController::class,'getAvailablePlaces'])->name("getAvailablePlaces");

Route::get('/showPlace/{place}',[PlaceController::class,'show'])->name('showPlace');

Route::post('/bookPlaces/{order}',[MUTController::class,'bookPlaces'])->name("bookPlaces");
Route::post('/bookWithTourguide/{order}/{tourguide}',[MUTController::class,'bookWithTourguide'])->name("bookWithTourguide");


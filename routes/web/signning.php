<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\registerationController\DriverController;
use App\Http\Controllers\Auth\registerationController\HotelOwnerController;
use App\Http\Controllers\Auth\registerationController\TourguideController;
use App\Http\Controllers\Auth\registerationController\UserController;
use App\Http\Controllers\orderController\OrderController;
use App\Http\Controllers\orderController\BookedRoomController;
use App\Http\Controllers\orderController\OrderedPlaceController;



Route::get('/register',[UserController :: class ,"create"])->name("user.create");
// Route::get('/userRegistrations/create',[userController :: class ,"create"])->name("userRegistrations");

// Route::post('/userRegistrations',[userController :: class ,"store"])->name("user.store");


Route::post('/userRegister',[UserController :: class ,"store"])->name("user.store");
Route::get('/hotelOwnerRegister',[HotelOwnerController :: class ,"create"])->name("hotelOwner.create");
Route::post('/hotelOwnerRegister',[HotelOwnerController :: class ,"store"])->name("hotelOwner.store");

Route::get('/driverRegister',[DriverController :: class ,"create"])->name("driver.create");
Route::post('/driverRegister',[DriverController :: class ,"store"])->name("driver.store");
Route::get('/tourguideRegister',[TourguideController :: class ,"create"])->name("tourguide.create");
Route::post('/tourguideRegister',[TourguideController :: class ,"store"])->name("tourguide.store");

Route::get('/login/{role}',[UserController :: class ,"login"])->name("login.create");
Route::post('/userlogin',[UserController :: class ,"validateLogin"])->name("login.store");

Route::post('/logout',[UserController :: class ,"logout"])->name("logout");


// Route::post('/MUTStoringOrder',[OrderController::class,'store'])->name("MUT.store");
Route::get('/availableRooms/{orderID}',[BookedRoomController::class,'index'])->name("availableRooms.index");
Route::post('/bookingRoom',[BookedRoomController::class,'store'])->name("bookingRoom");
Route::get('/availablePlaces/{orderID}',[OrderedPlaceController::class,'index'])->name("availablePlaces.index");










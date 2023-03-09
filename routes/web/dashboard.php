<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\registerationController\DriverController;
use App\Http\Controllers\Auth\registerationController\HotelOwnerController;
use App\Http\Controllers\Auth\registerationController\TourguideController;
use App\Http\Controllers\Auth\registerationController\userController;
use App\Http\Controllers\orderController\OrderController;
use App\Http\Controllers\orderController\BookedRoomController;
use App\Http\Controllers\orderController\OrderedPlaceController;



// //Driverregistrations---
Route::get('/driverDashForm',[DriverController :: class ,"createDriver"])->name("driverDash.create");
Route::get('/driverRegistrations',[DriverController :: class ,"index"])->name("driverDash.index");
Route::post('/driverRegistrations',[DriverController :: class ,"store"])->name("driverDash.store");
Route::delete('/deleteRoomImgs/{id}',[DriverController::class,'destroy'])->name("driverDash.destroy");

// //Userregistrations---
Route::get('/userDashForm',[userController :: class ,"createUser"])->name("UserDash.create");
Route::get('/userRegistrations',[userController :: class ,"index"])->name("UserDash.index");
Route::post('/userRegistrations',[userController :: class ,"store"])->name("UserrDash.store");
Route::delete('/deleteuserReg/{id}',[userController::class,'destroy'])->name("UserrDash.destroy");
// //hotelOwnerRegistrations---
Route::get('/HotelDashForm',[HotelOwnerController :: class ,"createHotelOwnwer"])->name("hotelOwnerDash.create");
Route::get('/hotelOwnerRegistrations',[HotelOwnerController :: class ,"index"])->name("hotelOwnerDash.index");
Route::post('/hotelOwnerRegistrations',[HotelOwnerController :: class ,"store"])->name("hotelOwnerDash.store");
Route::delete('/deletehotelOwner/{id}',[HotelOwnerController::class,'destroy'])->name("hotelOwnerDash.destroy");
// //TourgideRegistrations---
Route::get('/tourguideDashForm',[TourguideController :: class ,"createTourguide"])->name("tourgideDash.create");
Route::get('/tourguideRegistrations',[TourguideController :: class ,"index"])->name("tourgideDash.index");
Route::post('/tourguideRegistrations',[TourguideController :: class ,"store"])->name("tourgideDash.store");
Route::delete('/deletetourguideReg/{id}',[TourguideController::class,'destroy'])->name("tourgideDash.destroy");

///   login
Route::post('/login',[userController :: class ,"login"]);

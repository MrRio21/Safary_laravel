<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\registerationController\DriverController;
use App\Http\Controllers\Auth\registerationController\HotelOwnerController;
use App\Http\Controllers\Auth\registerationController\TourguideController;
use App\Http\Controllers\Auth\registerationController\userController;
use App\Http\Controllers\orderController\OrderController;
use App\Http\Controllers\orderController\BookedRoomController;
use App\Http\Controllers\orderController\OrderedPlaceController;



Route::get('/driverRegistrations',[DriverController :: class ,"index"])->middleware('auth:sanctum','role:user');
Route::post('/driverRegistrations',[DriverController :: class ,"store"]);
// //Userregistrations---
Route::get('/userRegistrations',[userController :: class ,"index"]);
Route::post('/userRegistrations',[userController :: class ,"store"]);
// //hotelOwnerRegistrations---
Route::get('/hotelOwnerRegistrations',[HotelOwnerController :: class ,"index"]);
Route::post('/hotelOwnerRegistrations',[HotelOwnerController :: class ,"store"]);
// //TourgideRegistrations---
Route::get('/tourguideRegistrations',[TourguideController :: class ,"index"]);
Route::post('/tourguideRegistrations',[TourguideController :: class ,"store"]);

///   login
Route::post('/login',[userController :: class ,"login"]);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\registerationController\DriverController;
use App\Http\Controllers\Auth\registerationController\HotelOwnerController;
use App\Http\Controllers\Auth\registerationController\TourgideController;
use App\Http\Controllers\Auth\registerationController\userController;

Route::get('/register',[userController :: class ,"create"])->name("user.store");
// Route::get('/userRegistrations/create',[userController :: class ,"create"])->name("userRegistrations");
// Route::post('/userRegistrations',[userController :: class ,"store"])->name("user.store");
Route::post('/userRegister',[userController :: class ,"store"])->name("user.store");
Route::get('/hotelOwnerRegister',[HotelOwnerController :: class ,"create"])->name("hotelOwner.create");
Route::post('/hotelOwnerRegister',[HotelOwnerController :: class ,"store"])->name("hotelOwner.store");
Route::get('/login',[userController :: class ,"login"])->name("login.create");
Route::post('/userlogin',[userController :: class ,"validateLogin"])->name("login.store");

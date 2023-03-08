<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\registerationController\DriverController;
use AApp\Http\Controllers\Auth\registerationController\HotelOwnerController;
use AApp\Http\Controllers\Auth\registerationController\TourgideController;
use App\Http\Controllers\Auth\registerationController\userController;

Route::get('/register',[userController :: class ,"index"])->name("userRegistrations.index");
Route::get('/userRegistrations/create',[userController :: class ,"create"])->name("userRegistrations");
Route::post('/userRegistrations',[userController :: class ,"store"])->name("user.store");

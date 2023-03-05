<?php

use App\Http\Controllers\Api\Auth\registerationController\DriverController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\RoleMiddleware;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\Auth\registerationController\userController;
use App\Http\Controllers\Api\Auth\registerationController\HotelOwnerController;
use App\Http\Controllers\Api\Auth\registerationController\TourguideController;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;



//  Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// //Driverregistrations---

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

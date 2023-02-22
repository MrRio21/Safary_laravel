<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Auth\registerationController\userController;
use App\Http\Controllers\Api\Auth\registerationController\Drivercontroller;
use App\Http\Controllers\Api\Auth\registerationController\HotelOwnerController;
use App\Http\Controllers\Api\Auth\registerationController\TourgideController;
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


// //Driverregistrations---
Route::get('/driverRegistrations',[App\Http\Controllers\Auth\reisteratinController\Drivercontroller :: class ,"index"]);
// Route::get('/driverRegistrations/create',[App\Http\Controllers\Auth\reisteratinController\Drivercontroller :: class ,"create"]);
Route::post('/driverRegistrations',[App\Http\Controllers\Auth\reisteratinController\Drivercontroller :: class ,"store"]);
// //Userregistrations---
Route::get('/userRegistrations',[App\Http\Controllers\Api\Auth\registerationController\userController :: class ,"index"]);
// Route::get('/userRegistrations/create',[App\Http\Controllers\Auth\reisteratinController\userController :: class ,"create"]);
Route::post('/userRegistrations',[App\Http\Controllers\Auth\reisteratinController\userController :: class ,"store"]);
// //hotelOwnerRegistrations---
Route::get('/hotelOwnerRegistrations',[App\Http\Controllers\Auth\reisteratinController\HotelOwnerController :: class ,"index"]);
// Route::get('/hotelOwnerRegistrations/create',[App\Http\Controllers\Auth\reisteratinController\HotelOwnerController :: class ,"create"]);
Route::post('/hotelOwnerRegistrations',[App\Http\Controllers\Auth\reisteratinController\HotelOwnerController :: class ,"store"]); 
// //TourgideRegistrations---
Route::get('/tourgideRegistrations',[App\Http\Controllers\Auth\reisteratinController\TourgideController :: class ,"index"]);
// Route::get('/tourgideRegistrations/create',[App\Http\Controllers\Auth\reisteratinController\TourgideController :: class ,"create"]);
Route::post('/tourgideRegistrations',[App\Http\Controllers\Auth\reisteratinController\TourgideController :: class ,"store"]);

// Route::group(['middleware' => ['web']], function () {
//     Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
    
// });


// Auth::routes();



// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


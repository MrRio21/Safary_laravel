<?php

namespace App\Http\Controllers\HotelController;

use App\Http\Controllers\HotelController;
use App\Models\hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Auth\registerationController\userController;
use App\Http\Controllers\Api\Auth\registerationController\Drivercontroller;
use App\Http\Controllers\Api\Auth\registerationController\HotelOwnerController;
use App\Http\Controllers\Api\Auth\registerationController\TourgideController;
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
use App\Http\Controllers\RequestRideController;


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
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();

// ----------hotels Apis-------------------//

// for all hotels review
Route::get('/hotels',[HotelController::class,'index']);

// data of the hotel that come from the form in the dashboard of hotel owner
Route::post('/storeHotel',[HotelController::class,'store']);
Route::get('/showHotel{id}',[HotelController::class,'show']);
Route::get('/test',function(){
    $body =[
        "name"=> "el 7amdlallah"
    ];
    return $body;
});
Route::get('/updateHotel{id}',[HotelController::class,'Update']);
    // for all hotels review

// data of the hotel that come from the form in the dashboard of hotel owner

// });



// ----------vehicle Apis-------------------//


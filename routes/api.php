<?php

namespace App\Http\Controllers\HotelController;
namespace App\Http\Controllers\hotelsController\HotelImgController;

use App\Http\Controllers\HotelController;
use App\Http\Controllers\hotelsController\HotelImgController;
use App\Models\hotel;
use Illuminate\Http\Request;
use App\Http\Controllers\RequestRideController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Auth\registerationController\userController;
use App\Http\Controllers\Api\Auth\registerationController\Drivercontroller;
use App\Http\Controllers\Api\Auth\registerationController\HotelOwnerController;
use App\Http\Controllers\Api\Auth\registerationController\TourgideController;



// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Auth::routes();
// //Driverregistrations---
Route::get('/driverRegistrations',[App\Http\Controllers\Auth\reisteratinController\Drivercontroller :: class ,"index"]);
Route::post('/driverRegistrations',[App\Http\Controllers\Auth\reisteratinController\Drivercontroller :: class ,"store"]);
// //Userregistrations---
Route::get('/userRegistrations',[App\Http\Controllers\Api\Auth\registerationController\userController :: class ,"index"]);
Route::post('/userRegistrations',[App\Http\Controllers\Auth\reisteratinController\userController :: class ,"store"]);
// //hotelOwnerRegistrations---
Route::get('/hotelOwnerRegistrations',[App\Http\Controllers\Auth\reisteratinController\HotelOwnerController :: class ,"index"]);
Route::post('/hotelOwnerRegistrations',[App\Http\Controllers\Auth\reisteratinController\HotelOwnerController :: class ,"store"]);
// //TourgideRegistrations---
Route::get('/tourgideRegistrations',[App\Http\Controllers\Auth\reisteratinController\TourgideController :: class ,"index"]);
Route::post('/tourgideRegistrations',[App\Http\Controllers\Auth\reisteratinController\TourgideController :: class ,"store"]);

// Route::group(['middleware' => ['web']], function () {
//     Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

// });



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();

// ----------hotels Apis-------------------//

// for all hotels review
Route::get('/hotels',[HotelController::class,'index']);

// data of the hotel that come from the form in the dashboard of hotel owner
Route::post('/storeHotel',[HotelController::class,'store']);

Route::get('/showHotel/{id}',[HotelController::class,'show']);

Route::PUT('/updateHotel/{id}',[HotelController::class,'update']);

Route::delete('/deleteHotel/{id}',[HotelController::class,'destroy']);

//-------------for imgs ----------------
Route::get('/hotelImgs',[HotelImgController::class,'index']);

// i didn't activate uploading......
Route::post('/storeHotelImg',[HotelImgController::class,'store']);

Route::get('/showHotelImg/{id}',[HotelImgController::class,'show']);

Route::PUT('/updateHotelImg/{id}',[HotelController::class,'Update']);

Route::delete('/deleteHotelImg/{id}',[HotelController::class,'destroy']);

// --------------dashboard of hotel owner ------------------------------------------

Route::get('/rooms',[HotelImgController::class,'index']);

// i didn't activate uploading img ......
Route::post('/storeRooms',[HotelImgController::class,'store']);

Route::get('/showRoom/{id}',[HotelImgController::class,'show']);

Route::PUT('/updateRoom/{id}',[HotelController::class,'Update']);

Route::delete('/deleteRoom/{id}',[HotelController::class,'destroy']);

//----------------------------------------------------

Route::get('/bookedRooms',[HotelImgController::class,'index']);

// i didn't activate uploading......
Route::post('/storeBookedRoom',[HotelImgController::class,'store']);

Route::get('/showBookedRoom/{id}',[HotelImgController::class,'show']);

Route::PUT('/updateBookedRoom/{id}',[HotelController::class,'Update']);

Route::delete('/deleteBookedRoom/{id}',[HotelController::class,'destroy']);


// });
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




// Auth::routes();



// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

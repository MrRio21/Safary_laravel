<?php

namespace App\Http\Controllers\HotelController;
namespace App\Http\Controllers\hotelsController\HotelImgController;

use App\Http\Controllers\HotelController;
use App\Http\Controllers\hotelsController\HotelImgController;
use App\Models\hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

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

// --------------------------------------------------------

Route::get('/rooms',[HotelImgController::class,'index']);

// i didn't activate uploading......
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

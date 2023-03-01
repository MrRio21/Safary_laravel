<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\hotelsController\HotelController;





// ----------hotels Apis-------------------//

// for all hotels review

// data of the hotel that come from the form in the dashboard of hotel owner
Route::get('/hotels',[HotelController::class,'index']);

Route::post('/storeHotel',[HotelController::class,'store']);

Route::get('/showHotel/{id}',[HotelController::class,'show']);

Route::PUT('/updateHotel/{id}',[HotelController::class,'update']);

Route::delete('/deleteHotel/{id}',[HotelController::class,'destroy']);

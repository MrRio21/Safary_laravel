<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HotelController;
use App\Http\Controllers\hotelsController\HotelImgController;
use App\Http\Controllers\hotelsController\BookedRoomController;
use App\Http\Controllers\hotelsController\RegularBookedRoomController;
use App\Http\Controllers\hotelsController\RoomController;
use App\Http\Controllers\hotelsController\RoomImgController;
use App\Http\Controllers\ordercontroller\OrderController;
use App\Http\Controllers\ordercontroller\OrderedPlaceController;
use App\Http\Controllers\placesController\PlaceController;
use App\Http\Controllers\placesController\PlaceImgController;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\Auth\registerationController\userController;
use App\Http\Controllers\Api\Auth\registerationController\DriverController;
use App\Http\Controllers\Api\Auth\registerationController\HotelOwnerController;
use App\Http\Controllers\Api\Auth\registerationController\TourguideController;




// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// //Driverregistrations---

Route::get('/driverRegistrations',[DriverController :: class ,"index"]);
Route::post('/driverRegistrations',[DriverController :: class ,"store"]);
// //Userregistrations---
Route::get('/userRegistrations',[userController :: class ,"index"]);
Route::post('/userRegistrations',[userController :: class ,"store"]);
// //hotelOwnerRegistrations---
Route::get('/hotelOwnerRegistrations',[HotelOwnerController :: class ,"index"]);
Route::post('/hotelOwnerRegistrations',[HotelOwnerController :: class ,"store"]);
// //TourgideRegistrations---
Route::get('/tourgideRegistrations',[TourguideController :: class ,"index"]);
Route::post('/tourgideRegistrations',[TourguideController :: class ,"store"]);

// Route::group(['middleware' => ['web']], function () {
//     Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

// });



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();

// ----------hotels Apis-------------------//

// for all hotels review

// data of the hotel that come from the form in the dashboard of hotel owner
Route::get('/hotels',[HotelController::class,'index']);

Route::post('/storeHotel',[HotelController::class,'store']);

Route::get('/showHotel/{id}',[HotelController::class,'show']);

Route::PUT('/updateHotel/{id}',[HotelController::class,'update']);

Route::delete('/deleteHotel/{id}',[HotelController::class,'destroy']);

//-------------for imgs ----------------
Route::get('/hotelImgs',[HotelImgController::class,'index']);

Route::post('/storeHotelImg',[HotelImgController::class,'store']);

Route::get('/showHotelImg/{id}',[HotelImgController::class,'show']);

Route::PUT('/updateHotelImg/{id}',[HotelImgController::class,'update']);

Route::delete('/deleteHotelImg/{id}',[HotelImgController::class,'destroy']);

// --------------dashboard of hotel owner ------------------------------------------
// for the both users and hotel owner -------------
Route::get('/rooms',[RoomController::class,'index']);

Route::post('/storeRooms',[RoomController::class,'store']);

Route::get('/showRoom/{id}',[RoomController::class,'show']);

Route::PUT('/updateRoom/{id}',[RoomController::class,'update']);

Route::delete('/deleteRoom/{id}',[RoomController::class,'destroy']);
//---------------------room imgs ---------------------------------------
Route::get('/roomsImg',[RoomImgController::class,'index']);

Route::post('/storeRoomsImgs',[RoomImgController::class,'store']);

Route::get('/showRoomImgs/{id}',[RoomImgController::class,'show']);

Route::PUT('/updateRoomImgs/{id}',[RoomImgController::class,'update']);

Route::delete('/deleteRoomImgs/{id}',[RoomImgController::class,'destroy']);


// --------------------BOOKING (REGULAR AND Custom )---------------------------------
//----------------------------------------------------

Route::get('/bookedRooms',[BookedRoomController::class,'index']);


Route::post('/storeBookedRoom',[BookedRoomController::class,'store']);

Route::get('/showBookedRoom/{id}',[BookedRoomController::class,'show']);

Route::PUT('/updateBookedRoom/{id}',[BookedRoomController::class,'update']);

Route::delete('/deleteBookedRoom/{id}',[BookedRoomController::class,'destroy']);


// });
// --------------------for regular booking ---------------------------
Route::get('/regularbookedRooms',[RegularBookedRoomController::class,'index']);

Route::post('/storeRegBookedRoom',[RegularBookedRoomController::class,'store']);

Route::get('/showRegBookedRoom/{id}',[RegularBookedRoomController::class,'show']);

Route::PUT('/updateRegBookedRoom/{id}',[RegularBookedRoomController::class,'update']);

Route::delete('/deleteRegBookedRoom/{id}',[RegularBookedRoomController::class,'destroy']);


// -----------------------

// the update option isn't available in the buisness 
Route::get('/orders',[OrderController::class,'index']);

// step 1 in customization
Route::post('/storeOrder',[OrderController::class,'store']);

Route::get('/showOrder/{id}',[OrderController::class,'show']);

Route::delete('/deleteOrder/{id}',[OrderController::class,'destroy']);

// ---------------customization------------------------
// get the orderId and the placeId
//
Route::get('/showAllPlaces',[PlaceController::class,'index']);
Route::post('/storePlace',[PlaceController::class,'store']);
Route::get('/showPlace/{id}',[PlaceController::class,'show']);
Route::PUT('/updatePlace/{id}',[PlaceController::class,'update']);

Route::delete('/deletePlace/{id}',[PlaceController::class,'destroy']);


// ------------------orderedplaces---------

Route::get('/orderedPlaces',[ OrderedPlaceController::class,'index']);

Route::post('/storeOrderedPlaces',[ OrderedPlaceController::class,'store']);

Route::get('/showOrderedPlaces/{id}',[ OrderedPlaceController::class,'show']);
Route::get('/updateOrderedPlaces/{id}',[ OrderedPlaceController::class,'update']);

Route::delete('/deleteOrderedPlaces/{id}',[ OrderedPlaceController::class,'destroy']);

// ------------------------------

Route::get('/placeImgs',[PlaceImgController::class,'index']);

Route::post('/placeImg',[PlaceImgController::class,'store']);

Route::get('placeImg/{id}',[PlaceImgController::class,'show']);

Route::PUT('/placeImg/{id}',[PlaceImgController::class,'update']);

Route::delete('/placeImg/{id}',[PlaceImgController::class,'destroy']);









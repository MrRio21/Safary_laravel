<?php

// namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\hotelsController\BookedRoomController;
use App\Http\Controllers\hotelsController\RegularBookedRoomController;
use App\Http\Controllers\hotelsController\RoomController;
use App\Http\Controllers\hotelsController\RoomImgController;
use App\Http\Controllers\orderController\OrderedPlaceController;

use Illuminate\Http\Request;




// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


// Route::group(['middleware' => ['web']], function () {
//     Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

// });

// -----------------------------------------------------
// register the hotel form that get all the hotel info
// in store func in hotel controller (store both the info and the images)
// to show the hotel details it will displayed in two places :
// 1- hotel page
// 2-dashboard of the hotelOwner to show all details and can edit it and delete it

// room form
// in store func in room controller (store both the info and the images)


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();

// ----------hotels Apis-------------------//

// for all hotels review

// data of the hotel that come from the form in the dashboard of hotel owner


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


// ---------------customization------------------------
// get the orderId and the placeId
//



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









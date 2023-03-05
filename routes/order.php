<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\orderController\OrderController;
use App\Http\Controllers\orderController\OrderController;
use App\Http\Controllers\orderController\BookedRoomController;
use App\Http\Controllers\orderController\OrderedPlaceController;
use App\Http\Controllers\orderController\BookTourGuideController;


// the update option isn't available in the buisness

// step 1 in customization :store the  order
Route::post('/storeOrder',[OrderController::class,'store']);

// step 2 : view all available rooms (( in their hotels )) --store the ordered rooms 
Route::post('/availableRooms',[BookedRoomController::class,'index']);
// get the order id and the room id 
Route::post('/storeOrderedRooms',[BookedRoomController::class,'store']);

Route::put('/updateOrderedRoom/{BookedRoom}',[BookedRoomController::class,'update']);
Route::delete('/deleteOrderedRoom',[BookedRoomController::class,'destroy']);

// step 3 : view places ((filter for their type and number of days in front)) -- store the selected 
Route::post('/availablePlaces',[OrderedPlaceController::class,'index']);
Route::post('/storeOrderedPlaces',[OrderedPlaceController::class,'store']);

Route::post('/updateOrderedPlaces',[OrderedPlaceController::class,'update']);
Route::delete('/deleteOrderedPlace',[OrderedPlaceController::class,'destroy']);


// step 4 : view places ((filter for their type and number of days in front)) -- store the selected 
Route::get('/availableTourguides',[BookTourGuideController::class,'index']);
Route::post('/storeOrderedTourguides',[BookTourGuideController::class,'store']);
Route::put('/updateOrderedTourguides/{tourguide_id}',[BookTourGuideController::class,'update']);
Route::delete('/deleteOrderedTourguides/{tourguide_id}',[BookTourGuideController::class,'destroy']);

Route::get('/showOrder/{id}',[OrderController::class,'show']);

Route::delete('/deleteOrder/{id}',[OrderController::class,'destroy']);

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

//
Route::post('/deleteOrder/{orderID}',[OrderController::class,'destroy']);

// step 2 : view all available rooms (( in their hotels )) --store the ordered rooms
// filter in front by date and availability

Route::get('/availableRooms/{orderID}',[BookedRoomController::class,'index']);
// get the order id and the room id[]
Route::post('/storeOrderedRooms/{orderID}',[BookedRoomController::class,'store']);
 Route::post('/deleteOrderedRoom/{orderID}',[BookedRoomController::class,'destroy']);

Route::put('/updateOrderedRoom/{orderID}/{roomID}',[BookedRoomController::class,'update']);
// step 3 : view places ((filter for their type and number of days in front)) -- store the selected
Route::post('/availablePlaces/{orderID}',[OrderedPlaceController::class,'index']);
Route::post('/storeOrderedPlaces/{orderID}',[OrderedPlaceController::class,'store']);
Route::get('/showStoredOrderedPlaces/{orderID}',[OrderedPlaceController::class,'show']);
// he shouldn't be able to update the places he choose because it was picked
// by algorthism of the price
Route::post('/updateOrderedPlaces/{orderId}',[OrderedPlaceController::class,'update']);
Route::post('/deleteOrderedPlace/{orderId}',[OrderedPlaceController::class,'destroy']);


// step 4 : view places ((filter for their type and number of days in front)) -- store the selected
Route::get('/availableTourguides',[BookTourGuideController::class,'index']);
Route::post('/storeOrderedTourguides',[BookTourGuideController::class,'store']);
Route::put('/updateOrderedTourguides/{tourguide_id}',[BookTourGuideController::class,'update']);
Route::delete('/deleteOrderedTourguides/{tourguide_id}',[BookTourGuideController::class,'destroy']);

Route::get('/showOrder/{id}',[OrderController::class,'show']);

Route::delete('/deleteOrder/{id}',[OrderController::class,'destroy']);

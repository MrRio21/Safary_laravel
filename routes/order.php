<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\orderController\OrderController;
use App\Http\Controllers\orderController\OrderController;
use App\Http\Controllers\orderController\BookedRoomController;
use App\Http\Controllers\orderController\OrderedPlaceController;
use App\Http\Controllers\orderController\BookTourGuideController;
use App\Http\Controllers\orderController\OrderDetailsController;


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
 Route::get('/showStoredBookedRooms/{orderID}',[BookedRoomController::class,'show']);

Route::post('/updateOrderedRoom/{orderID}',[BookedRoomController::class,'update']);
// step 3 : view places ((filter for their type and number of days in front)) -- store the selected
Route::post('/availablePlaces/{orderID}',[OrderedPlaceController::class,'index']);
Route::post('/storeOrderedPlaces/{orderID}',[OrderedPlaceController::class,'store']);
Route::get('/showStoredOrderedPlaces/{orderID}',[OrderedPlaceController::class,'show']);
// he shouldn't be able to update the places he choose because it was picked
// by algorthism of the price
Route::post('/updateOrderedPlaces/{orderId}',[OrderedPlaceController::class,'update']);
Route::post('/deleteOrderedPlace/{orderID}',[OrderedPlaceController::class,'destroy']);


// step 4 : view places ((filter for their type and number of days in front)) -- store the selected
Route::post('/availableTourguides/{orderID}',[BookTourGuideController::class,'index']);
Route::post('/bookTourguide/{orderID}',[BookTourGuideController::class,'store']);
Route::post('/updateBookedTourguide/{orderID}',[BookTourGuideController::class,'update']);
Route::post('/deleteBookedTourguide/{orderID}',[BookTourGuideController::class,'destroy']);

Route::get('/showOrder/{orderID}',[OrderController::class,'show']);

Route::delete('/deleteOrder/{orderID}',[OrderController::class,'destroy']);


// ----------------------------------

Route::post('/sendOrderRequests/{orderID}',[OrderDetailsController::class,'store']);

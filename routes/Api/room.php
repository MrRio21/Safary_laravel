<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\hotelsController\RoomController;




// --------------dashboard of hotel owner ------------------------
// for the both users and hotel owner -------------
Route::get('/rooms',[RoomController::class,'index']);


// localhost:8000/api/storeRooms

Route::post('/storeRooms',[RoomController::class,'store']);

Route::get('/showRoom/{id}',[RoomController::class,'show']);

Route::PUT('/updateRoom/{id}',[RoomController::class,'update']);

Route::delete('/deleteRoom/{id}',[RoomController::class,'destroy']);
<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\placesController\PlaceController;




Route::get('/showAllPlaces',[PlaceController::class,'index']);
Route::post('/storePlace',[PlaceController::class,'store']);
Route::get('/showPlace/{placeID}',[PlaceController::class,'show']);
Route::PUT('/updatePlace/{placeID}',[PlaceController::class,'update']);

Route::delete('/deletePlace/{placeID}',[PlaceController::class,'destroy']);
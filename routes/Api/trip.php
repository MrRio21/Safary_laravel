<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\tripController\TripController;





Route::get('/trips',[TripController::class,'index']);
Route::post('/storeTrip',[TripController::class,'store']);
Route::get('/showTrip/{tripID}',[TripController::class,'show']);
Route::PUT('/updateTrip/{tripID}',[TripController::class,'update']);

Route::delete('/deleteTrip/{tripID}',[TripController::class,'destroy']);
 
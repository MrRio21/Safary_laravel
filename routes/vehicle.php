<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// use App\Http\Controllers\hotelsController\HotelController;
use App\Http\Controllers\Api\Auth\registerationController\userController;
use App\Http\Controllers\vehicleController\RequestRideController;
use App\Http\Controllers\vehicleController\VehicleController;

///////////Request ride   /////////////
// Route::get('/hotels',[HotelController::class,'index']);

Route::get('/allRequestRide',[RequestRideController::class,'index']);

Route::post('/storeRide',[RequestRideController::class,'store']);

Route::get('/showRide/{id}',[RequestRideController::class,'show']);

Route::PUT('/updateRide/{id}',[RequestRideController::class,'update']);

Route::delete('/deleteRide/{id}',[RequestRideController::class,'destroy']);


/////////// vehicle   /////////////

Route::get('/vehicle',[VehicleController::class,'index']);
Route::post('/storeVehicle',[VehicleController::class,'store']);
Route::PUT('/updateVehicle/{id}',[VehicleController::class,'update']);



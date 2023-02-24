<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\VehicleController;
// use App\Http\Controllers\hotelsController\HotelController;
use App\Http\Controllers\Api\Auth\registerationController\userController;




///////////Request ride   /////////////
// Route::get('/hotels',[HotelController::class,'index']);

Route::get('/requestRide',[VehicleController::class,'index']);

Route::post('/storeRide',[VehicleController::class,'store']);

Route::get('/showRide/{id}',[VehicleController::class,'show']);

Route::PUT('/updateRide/{id}',[VehicleController::class,'update']);

Route::delete('/deleteRide/{id}',[VehicleController::class,'destroy']);






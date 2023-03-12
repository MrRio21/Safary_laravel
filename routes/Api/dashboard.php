<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\dashboard\DashboardController;


// hotelOwner dashboard---------------------
Route::post('/allOwnedHotels',[DashboardController::class,'allOwnedHotels']);
Route::post('/hotelOwnerInfo',[DashboardController::class,'hotelOwnerInfo']);


Route::post('/hotelOwnerInfo',[DashboardController::class,'hotelOwnerInfo']);



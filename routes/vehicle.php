<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\HotelController;



Route::get('/hotels',[HotelController::class,'index']);






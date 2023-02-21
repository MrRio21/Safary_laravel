<?php

use App\Http\Controllers\HotelController;
use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();

    // for all hotels review
Route::get('/allotels',[HotelController::class,'index']);

// data of the hotel that come from the form in the dashboard of hotel owner
Route::post('/hotelRegisteration',[Hotel::class,'store']);
});

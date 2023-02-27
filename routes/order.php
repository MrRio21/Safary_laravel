<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\orderController\OrderController;


// the update option isn't available in the buisness
Route::get('/orders',[OrderController::class,'index']);

// step 1 in customization
Route::post('/storeOrder',[OrderController::class,'store']);

Route::get('/showOrder/{id}',[OrderController::class,'show']);

Route::delete('/deleteOrder/{id}',[OrderController::class,'destroy']);

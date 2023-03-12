<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutUsController;


Route::get('aboutUs',[AboutUsController::class,'index']);


// Route::get('/aboutUs',[AboutUsController :: class ,"index"]);
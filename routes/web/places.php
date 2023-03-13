<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewPlacesController;


Route::get('allPlaces',[ViewPlacesController::class,'index']);



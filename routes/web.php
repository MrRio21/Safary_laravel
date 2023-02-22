<?php

namespace App\Http\Controllers\HotelController;
use App\Http\Controllers\HotelController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test1',function(){
    return 'test';
});

Route::get('/test',function(){
    $body =[
        "name"=> "el 7amdlallah"
    ];
    return $body;
});

Route::get('/hotels',[HotelController::class,'index']);

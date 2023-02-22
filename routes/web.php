<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\registerationControlle\DriverController;
use AApp\Http\Controllers\Auth\registerationControlle\HotelOwnerController;
use AApp\Http\Controllers\Auth\registerationControlle\TourgideController;
use App\Http\Controllers\Auth\registerationControlle\userController;

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
//Driverregistrations---
Route::get('/driverRegistrations',[DriverController :: class ,"index"])->name("driverRegistrations.index");
Route::get('/driverRegistrations/create',[Drivercontroller :: class ,"create"])->name("driverRegistrations.create");
Route::post('/driverRegistrations',[Drivercontroller :: class ,"store"])->name("driverRegistrations.store"); 
//Userregistrations---
Route::get('/userRegistrations',[userController :: class ,"index"])->name("userRegistrations.index");
Route::get('/userRegistrations/create',[userController :: class ,"create"])->name("userRegistrations.create");
Route::post('/userRegistrations',[userController :: class ,"store"])->name("userRegistrations.store"); 
//hotelOwnerRegistrations---
Route::get('/hotelOwnerRegistrations',[HotelOwnerController :: class ,"index"])->name("hotelOwnerRegistrations.index");
Route::get('/hotelOwnerRegistrations/create',[HotelOwnerController :: class ,"create"])->name("hotelOwnerRegistrations.create");
Route::post('/hotelOwnerRegistrations',[HotelOwnerController :: class ,"store"])->name("hotelOwnerRegistrations.store"); 
//TourgideRegistrations---
Route::get('/tourgideRegistrations',[TourgideController :: class ,"index"])->name("tourgideRegistrations.index");
Route::get('/tourgideRegistrations/create',[TourgideController :: class ,"create"])->name("tourgideRegistrations.create");
Route::post('/tourgideRegistrations',[TourgideController :: class ,"store"])->name("tourgideRegistrations.store"); 


Route::group(['middleware' => ['web']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
    
});


Auth::routes();



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

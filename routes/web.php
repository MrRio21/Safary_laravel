<?php

namespace App\Http\Controllers;
use App\Http\Controllers\HotelController;
// use App\Models\Room ;
use App\Models\Room;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\registerationControlle\DriverController;
use AApp\Http\Controllers\Auth\registerationControlle\HotelOwnerController;
use AApp\Http\Controllers\Auth\registerationControlle\TourgideController;
use App\Http\Controllers\Auth\registerationControlle\userController;
use App\Http\Controllers\orderController\OrderController;
use App\Http\Controllers\tripController\ChosenTripController;
use App\Http\Controllers\dashboard\DashboardController;


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
// Route::get('/driverRegistrations',[DriverController :: class ,"index"])->name("driverRegistrations.index");
// Route::get('/driverRegistrations/create',[Drivercontroller :: class ,"create"])->name("driverRegistrations.create");
// Route::post('/driverRegistrations',[Drivercontroller :: class ,"store"])->name("driverRegistrations.store");
// //Userregistrations---
// Route::get('/userRegistrations',[userController :: class ,"index"])->name("userRegistrations.index");
// Route::get('/userRegistrations/create',[userController :: class ,"create"])->name("userRegistrations.create");
// Route::post('/userRegistrations',[userController :: class ,"store"])->name("userRegistrations.store");
// //hotelOwnerRegistrations---
// Route::get('/hotelOwnerRegistrations',[HotelOwnerController :: class ,"index"])->name("hotelOwnerRegistrations.index");
// Route::get('/hotelOwnerRegistrations/create',[HotelOwnerController :: class ,"create"])->name("hotelOwnerRegistrations.create");
// Route::post('/hotelOwnerRegistrations',[HotelOwnerController :: class ,"store"])->name("hotelOwnerRegistrations.store");
// //TourgideRegistrations---
// Route::get('/tourgideRegistrations',[TourgideController :: class ,"index"])->name("tourgideRegistrations.index");
// Route::get('/tourgideRegistrations/create',[TourgideController :: class ,"create"])->name("tourgideRegistrations.create");
// Route::post('/tourgideRegistrations',[TourgideController :: class ,"store"])->name("tourgideRegistrations.store");

Route::get('testtrip',[ChosenTripController :: class, 'test']);
Route::get('chosentrip',[DashboardController :: class, 'chosenTrip']);

Route::get('watch', function(){
    return view('driver.storeVehicle');
});

Route::group(['middleware' => ['web']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
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
Route::get('/test',function(){
    return view ('dashboard/driver');
});

Route::get('/order',[OrderController::class,'index']);
// Route::post('/order',[OrderController::class,'store']);


function takeTheBudget($budget){
    $returnedRooms=[];
    $newBudget= $budget* 60%
    $rooms = Room::all();
    foreach ($rooms as $room) {
        if ($room->price <= $newBudget) {
            array_push($returnedRooms,$room);
            return $returnedRooms;
        }
    }
    $newBudget= $budget* 60%
    $rooms = Room::all();
    foreach($rooms as $room){
        if ($room->price < $newBudget){

        }
    }

}

function resetBudget($budget ,$checkIn){
    $userCustomization =[];
    // $newBudget= $budget* 60%



}

// function showPlaces($nOFDays){

// }

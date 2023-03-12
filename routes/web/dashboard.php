<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\registerationController\DriverController;
use App\Http\Controllers\Auth\registerationController\HotelOwnerController;
use App\Http\Controllers\Auth\registerationController\TourguideController;
use App\Http\Controllers\Auth\registerationController\userController;
use App\Http\Controllers\orderController\OrderController;
use App\Http\Controllers\orderController\BookedRoomController;
use App\Http\Controllers\orderController\OrderedPlaceController;
use App\Http\Controllers\placesController\PlaceController;
use App\Http\Controllers\placesController\PlaceImgController;
use App\Http\Controllers\vehicleController\vehicleController;
use App\Http\Controllers\hotelsController\hotelsController;
use App\Http\Controllers\tripController\tripController;
use App\Http\Controllers\dashboard\DashboardController;






// //Driverregistrations---
Route::get('/driverDashForm',[DriverController :: class ,"createDriver"])->name("driverDash.create");
Route::get('/driverRegistrations',[DriverController :: class ,"index"])->name("driverDash.index");
Route::post('/driverRegistrations',[DriverController :: class ,"store"])->name("driverDash.store");
Route::delete('/deldriverReg/{id}',[DriverController::class,'destroy'])->name("driverDash.destroy");

// //Userregistrations---
Route::get('/userDashForm',[userController :: class ,"createUser"])->name("UserDash.create");
Route::get('/userRegistrations',[userController :: class ,"index"])->name("UserDash.index");
Route::post('/userRegistrations',[userController :: class ,"storeuser"])->name("UserrDash.store");
Route::delete('/deleteuserReg/{id}',[userController::class,'destroy'])->name("UserrDash.destroy");
// //hotelOwnerRegistrations---
Route::get('/HotelDashForm',[HotelOwnerController :: class ,"createHotelOwnwer"])->name("hotelOwnerDash.create");
Route::get('/hotelOwnerRegistrations',[HotelOwnerController :: class ,"index"])->name("hotelOwnerDash.index");
Route::post('/hotelOwnerRegistrations',[HotelOwnerController :: class ,"store"])->name("hotelOwnerDash.store");
Route::delete('/deletehotelOwner/{id}',[HotelOwnerController::class,'destroy'])->name("hotelOwnerDash.destroy");
// //TourgideRegistrations---
Route::get('/tourguideDashForm',[TourguideController :: class ,"createTourguide"])->name("tourgideDash.create");
Route::get('/tourguideRegistrations',[TourguideController :: class ,"index"])->name("tourgideDash.index");
Route::post('/tourguideRegistrations',[TourguideController :: class ,"store"])->name("tourgideDash.store");
Route::delete('/deletetourguideReg/{id}',[TourguideController::class,'destroy'])->name("tourgideDash.destroy");


///   login
Route::post('/login',[userController :: class ,"login"]);





// //=============================================================================================================================================


Route::get('/PlaceDashForm',[PlaceController :: class ,"create"])->name("PlaceeDash.create");
Route::get('/PlaceDash',[PlaceController :: class ,"index"])->name("PlaceeDash.index");
Route::post('/PlaceDash',[PlaceController :: class ,"store"])->name("PlaceeDash.store");
Route::delete('/deletePlaceDash/{id}',[PlaceController::class,'destroy'])->name("PlaceeDash.destroy");
Route::PUT('/PlaceDash/{id}', [PlaceController::class, 'update'])->name('PlaceDash.update');
Route::get('/PlaceDash/{id}/edit', [PlaceController::class, 'edit'])->name('PlaceDash.edit');


// //=============================================================================================================================================


Route::get('/VehicleDashForm',[VehicleController :: class ,"create"])->name("VehiclleDash.create");
Route::get('/VehicleDash',[VehicleController :: class ,"index"])->name("VehiclleDash.index");
Route::post('/VehicleDash',[VehicleController :: class ,"store"])->name("VehiclleDash.store");
Route::delete('/deleteVehicleDash/{id}',[VehicleController::class,'destroy'])->name("VehiclleDash.destroy");

// //=============================================================================================================================================



Route::get('/HotelDashForm',[HotelController :: class ,"create"])->name("HotellDash.create");
Route::get('/HotelDash',[HotelController :: class ,"index"])->name("HotellDash.index");
Route::post('/HotelDash',[HotelController :: class ,"store"])->name("HotellDash.store");
Route::delete('/deleteHotelDash/{id}',[HotelController::class,'destroy'])->name("HotellDash.destroy");


// //=============================================================================================================================================



Route::get('/TripDashForm',[TripController :: class ,"create"])->name("TrippDash.create");
Route::get('/TripDash',[TripController :: class ,"index"])->name("TrippDash.index");
Route::post('/TripDash',[TripController :: class ,"store"])->name("TrippDash.store");
Route::delete('/deleteTripDash/{id}',[TripController::class,'destroy'])->name("TrippDash.destroy");
Route::PUT('/TripDash/{id}', [TripController::class, 'update'])->name('TripDash.update');
Route::get('/TripDash/{id}/edit', [TripController::class, 'edit'])->name('TripDash.edit');



// //=============================================================================================================================================



Route::get('/OrderDetails',[OrderDetailsController :: class ,"create"])->name("OrderrDetails.create");
Route::get('/OrderDetails',[OrderDetailsController :: class ,"index"])->name("OrderrDetails.index");
Route::post('/OrderDetails',[OrderDetailsController :: class ,"store"])->name("OrderrDetails.store");
Route::delete('/deleteOrderDetails/{id}',[OrderDetailsController::class,'destroy'])->name("OrderrDetails.destroy");

// //=============================================================================================================================================
// //=============================================================================================================================================
// //=============================================================================================================================================
// //===========================================================================================================================================


Route::get('/TourguideProfile',[TourguideController :: class ,"index"])->name("TourguideProfile.index");
Route::delete('/deleterequest/{id}',[TourguideController::class,'destroy'])->name("deleterequest.destroy");
Route::post('/TourguideProfile',[TourguideController :: class ,"store"])->name("TourguideProfile.store");
Route::PUT('/TourguideProfile/{id}', [TourguideController::class, 'update'])->name('TourguideProfile.update');
Route::get('/TourguideProfile/{id}/edit', [TourguideController::class, 'edit'])->name('TourguideProfile.edit');




// Route::get('/TourguideProfilee',function(){
//     return view ('dashboardTourguide\tourguidprofile') ;
// });



// //==================Hotel Owner Dashboard=======================================================================================================
// //=============================================================================================================================================
// //=============================================================================================================================================
// //=============================================================================================================================================


Route::get('/HotelOwnerDashboard',[DashboardController :: class ,"addHotelView"])->name("addHotelView");
Route::post('/addHotel/HotelOwnerDashboard',[DashboardController :: class ,"addHotel"])->name("addHotel");
Route::get('/MyDashboard',[DashboardController :: class ,"dashboard"])->name("hotelOwnerDashboard");
Route::get('/MyOwnedHotels',[DashboardController :: class ,"allOwnedHotels"])->name("MyOwnedHotels");
Route::get('/previewHotel/{hotelID}',[DashboardController :: class ,"previewHotel"])->name("previewHotel");
Route::get('/deleteHotel/{hotelID}',[DashboardController :: class ,"deleteHotel"])->name("deleteHotel");
Route::get('/editHotel/{hotelID}',[DashboardController :: class ,"editHotel"])->name("editHotel");
Route::post('/updateHotel/{hotelID}',[DashboardController :: class ,"updateHotel"])->name("updateHotel");

// --------------------------rooms

Route::get('/AllRooms/{hotelID}',[DashboardController :: class ,"AllRooms"])->name("AllRooms");
Route::get('/addRoom',[DashboardController :: class ,"addRoomForm"])->name("addRoomForm");
Route::get('/addRoomforHotel/{hotelID}',[DashboardController :: class ,"addRoomFormForHotel"])->name("addRoomFormForHotel");
Route::post('/storeRoom',[DashboardController :: class ,"storeRoom"])->name("storeRoom");
Route::get('/previewRoom/{roomID}',[DashboardController :: class ,"previewRoom"])->name("previewRoom");
Route::get('/deleteRoom/{roomID}',[DashboardController :: class ,"deleteRoom"])->name("deleteRoom");
Route::get('/editRoom/{roomID}',[DashboardController :: class ,"editRoom"])->name("editRoom");
Route::post('/updateRoom/{roomID}',[DashboardController :: class ,"updateRoom"])->name("updateRoom");
Route::get('/editRoom/{roomID}',[DashboardController :: class ,"editRoom"])->name("editRoom");
Route::get('/editRoom/{roomID}',[DashboardController :: class ,"editRoom"])->name("editRoom");

Route::get('/allRequests',[DashboardController :: class ,"allRequests"])->name("allRequests");
Route::get('/changeRequest/{bookedRoom}',[DashboardController :: class ,"allRequests"])->name("changeStatus");




// /=====================================================================================================================
Route::PUT('/driverRegistrations/{id}', [DriverController::class, 'update'])->name('driverprofileDash.update');
Route::get('/driverRegistrations/{id}/edit', [DriverController::class, 'edit'])->name('driverprofileDash.edit');
Route::get('/driverRegistrations',[DriverController :: class ,"indexprofile"])->name("driverprofileDash.index");










// ======================================================================================================
Route::get('/HotelTable',function(){return view('/dashboardAdmin/allHotels/HotelTable');})->name('HotellTable');
Route::get('/placesTable',function(){return view('/dashboardAdmin/allPlaces/placesTable');})->name('placessTable');
Route::get('/tripTable',function(){return view('/dashboardAdmin/allTrips/tripTable');})->name('trippTable');
Route::get('/vechileTable',function(){return view('/dashboardAdmin/allVehcile/vechileTable');})->name('vechileeTable');
Route::get('/OrderTable',function(){return view('/dashboardAdmin/order/OrdetTable');})->name('OrderrTable');

Route::get('/AdminDash',function(){return view('/dashboardAdmin/admin');})->name('AdminDash');
Route::get('/TougguideDash',function(){return view('/dashboardTourguide/dashboardview');})->name('TougguideDash');
Route::get('/dashboardDriver',function(){return view('/dashboardDriver/dashboardview');})->name('dashboardDriver');
Route::get('/dashboardHotelOwner',function(){return view('/dashboardHotelOwner/index');})->name('dashboardHotelOwner');


Route::get('/tourguideform',function(){return view('/dashboardAdmin/Tourguide/tourguideform');})->name('tourguideeeform');
Route::get('/userform',function(){return view('/dashboardAdmin/user/userform');})->name('userrform');
Route::get('/users',function(){return view('/dashboardAdmin/user/users');})->name('userss');

Route::get('/admin',function(){return view('/dashboardAdmin/admin');})->name('adminn');


Route::get('/index',function(){return view('/layouts/nav');})->name('index');
Route::get('/landingPage',function(){return view('/landingPage/index');})->name('landingPage');



// @extends('layouts/nav')
// @section('bodyContent')


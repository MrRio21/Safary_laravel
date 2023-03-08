<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\hotelsController\HotelController;
use App\Http\Controllers\hotelsController\RoomController;





// ----------hotels Apis-------------------//

// for all hotels review

// data of the hotel that come from the form in the dashboard of hotel owner


// localhost:8000/api/hotels
Route::get('/hotels',[HotelController::class,'index']);
// output:{
//     "allHotels": [
//         {
//             "id": 1,
//             "created_at": "2023-03-01T21:49:49.000000Z",
//             "updated_at": "2023-03-01T21:49:49.000000Z",
//             "name": "marhba",
//             "address": "kornish Aswan beside Aswan station",
//             "cover_img": "sfcscsc.jpg",
//             "type": "hotel",
//             "hotel_owner_id": 1
//         }
//     ],
//     "hotelImgs": []
// }
// --------------------------------------------------------------
// localhost:8000/api/storeHotel?
// name=marhba&
// address=kornish Aswan beside Aswan station&
// type=hotel&
// hotel_owner_id=1&
// cover_img=sfcscsc.jpg


Route::post('/storeHotel',[HotelController::class,'store']);
// outPut :{
//     "hotel info ": {
//         "name": "marhba",
//         "address": "kornish Aswan beside Aswan station",
//         "type": "hotel",
//         "cover_img": "sfcscsc.jpg",
//         "hotel_owner_id": "1",
//         "updated_at": "2023-03-02T08:27:04.000000Z",
//         "created_at": "2023-03-02T08:27:04.000000Z",
//         "id": 2
//     },
//     "hotel info is saved successfully ": "message"
// }

// ------------------------------------------------------------------

// localhost:8000/api/showHotel/1
Route::get('/showHotel/{hotelID}',[HotelController::class,'show']);
// output:{
//     "hotel info": [
//         {
//             "id": 1,
//             "created_at": "2023-03-01T21:49:49.000000Z",
//             "updated_at": "2023-03-01T21:49:49.000000Z",
//             "name": "marhba",
//             "address": "kornish Aswan beside Aswan station",
//             "cover_img": "sfcscsc.jpg",
//             "type": "hotel",
//             "hotel_owner_id": 1
//         }
//     ],
//     "hotel Imgs": {}
// }

// ----------------------------------------------------------------------

// 
Route::PUT('/updateHotel/{hotelID}',[HotelController::class,'update']);

Route::delete('/deleteHotel/{hotelID}',[HotelController::class,'destroy']);
 

// ----------------------------------
Route::post('/storeRoom',[RoomController::class,'store']);

Route::get('/showRoom/{roomID}',[RoomController::class,'show']);
Route::put('updateRoom/{roomID}',[RoomController::class,'show']);
Route::delete('deleteRoom/{roomID}',[RoomController::class]);

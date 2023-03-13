<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Models\HotelImg;
use App\Models\Room;
use App\Models\RoomImg;
use App\Http\Controllers\Controller;
use App\Models\HotelOwner;
use Illuminate\Support\Facades\Auth;


class viewHotelsController extends Controller
{
    //
    public function index()
    {
        $allHotels =Hotel::all();
        $hotelImgs= HotelImg::all();
        
        return view("hotels.allHotels",["allHotels"=> $allHotels],["hotelImgs"=>$hotelImgs]);
    }

    public function hotel($hotelID)
    {
        $hotelInfo = Hotel::find($hotelID);
        $hotelImgs= HotelImg::where('hotel_id',$hotelID);

        $rooms=Room::all();
        $roomImgs= RoomImg::all();

        return view("hotels.hotel",["hotelInfo"=> $hotelInfo,"hotelImgs"=>$hotelImgs],["rooms"=> $rooms,"roomImgs"=>$roomImgs]);
    }

    public function room($roomID)
    { 
        $rooms=Room::all();
        $roomsImgs= RoomImg::where('room_id',$roomID);
        // dd($rooms);

        // return view("hotels.room",["rooms"=> $rooms,"roomsImgs"=>$roomsImgs]);

        $roomInfo =Room::find($roomID);
        $roomImgs= RoomImg::where('room_id',$roomID);

        return view("hotels.room",["roomInfo"=> $roomInfo,"roomImgs"=>$roomImgs]);

    }

}

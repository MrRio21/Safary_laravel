<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Models\HotelImg;
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
        // return  response()->json([
        //     'hotel info'=>$hotelInfo ,
        //     'hotel Imgs' => $hotelImgs
        // ]);
        return view("hotels.hotel",["Hotel"=> $hotelInfo],["hotelImg"=>$hotelImgs]);
    }

    public function room()
    { 
        return view("hotels.room");
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Models\HotelImg;


class viewHotelsController extends Controller
{
    //
    public function index()
    {
        // $allHotels =Hotel::all();
        // $hotelImgs= HotelImg::all();
        
        return view("hotels.allHotels");
    }

    public function hotel()
    {
        // $allHotels =Hotel::all();
        // $hotelImgs= HotelImg::all();
        
        return view("hotels.hotel");
    }

    public function room()
    { 
        return view("hotels.room");
    }

}

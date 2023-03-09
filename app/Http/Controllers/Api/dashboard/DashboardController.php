<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
use App\Models\HotelImg;
use App\Models\HotelOwner;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // hotel owner ............................................................
    public function allOwnedHotels(Request $request){
        $hotelsInfo =Hotel::where('hotel_owner_id',$request['hotel_owner_id']);
        foreach($hotelsInfo as $hotelInfo){
            $hotelImg=HotelImg::where('hotel_id',$hotelInfo->id);
            return response()->json([
                'hotel Info'=>$hotelInfo,
                'hotel Imgs' => $hotelImg
            ]);
        }
    }
    public function hotelOwnerInfo(Request $request){
        $hotelOwner =HotelOwner::find($request['hotel_owner_id']);
            return response()->json([
                'hotelOwner Info'=>$hotelOwner,
                
            ]);
        
    }
    public function allUsers(Request $request){
        $hotelOwner =HotelOwner::find($request['hotel_owner_id']);
            return response()->json([
                'hotelOwner Info'=>$hotelOwner,
                
            ]);
        
    }
}

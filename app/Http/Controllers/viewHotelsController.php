<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Models\HotelImg;
use App\Models\Room;
use App\Models\RoomImg;
use App\Http\Controllers\Controller;
use App\Models\HotelOwner;
use App\Models\BookedRoom;
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
         
         $rooms=Room::where('hotel_id',$hotelID)->get();
        


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

    public function bookingRoom(Order $order , Request $request,Hotel $hotel)
{
    BookedRoom::create([
        'order_id'=>(int)$order->id,
        'hotel_id'=>(int)$hotel->id,
    'room_id'=>(int)$request->room_id
    ]);

    $room=Room::find($request->room_id);

    // Send a notification to the admin => if we wanna send email to admin
    // Notification::route('mail', 'admin@example.com')
    //             ->notify(new BookingNotification($booking));

    // Redirect back to the form with a success message
    return redirect()->back()->with('success', 'Your booking was successful!');
}
}

<?php

namespace App\Http\Controllers\hotelsController;
use App\Http\Controllers\Controller;
use App\Models\Room;
use App\Models\RoomImg;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms =Room::all();
        $roomsImgs=DB::table("room_imgs")
        ->join("hotels", function($join){
            $join;
        })
        ->where("room_imgs.hotel_id", "=", "hotels.id")
        ->get();
        
        return response()->json([
            'rooms'=>$rooms ,
            'roomsImgs'=>$roomsImgs
        ]); 
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'price'=>'required',
            // 'available_rooms '=>'required',
            'type'=>'required',
        ]);
        $roomPrice = $request['price'];
        $available_rooms =$request['available_rooms'];
        $type = $request['type'];
        $cover_img = $request['cover_img'];
        $hotelID=  $request['hotel_id'];
        $checkIn=  $request['check_in'];
        $checkOut=  $request['check_out'];
        $room = room::create([
            'price' => $roomPrice,
            'available_rooms' =>$available_rooms,
            'type' =>$type,
            'hotel_id' => $hotelID,
            'cover_img' => $cover_img,
            'check_in' => $checkIn,
            'check_out' => $checkOut
        ]);
        return response()->json([
            'room info '=> $room,
            'room info is saved successfully '=>'message' 
        ]);  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        $room = Room::find($room);
        return response()->json([
            'room info '=> $room,
            'room info is saved successfully '=>'message' 
        ]);  
    }

 
    public function update(Request $request, Room $room)
    {
        if($request['price']){

            $results=Room::where ('id',$room)->update([
                  'price'=> $request['price'], 
              ]);
          }
          if($request['available_rooms']){
  
              $results=Room::where ('id',$room)->update([
                  'available_rooms'=> $request['available_rooms'], 
              ]);
          }
          if($request['type']){

            $results=Room::where ('id',$room)->update([
                  'type'=> $request['type'], 
              ]);
          }
          if($request['price']&&$request['available_rooms']&& $request['type'] &&$request['cover_img']){
              $results=Room::where ('id',$room)->update([
                  'price'=> $request['price'], 
                  'available_rooms' => $request['available_rooms'],
                  'type'=> $request['type'], 
                  'cover_img'=> $request['cover_img'], 
                ]);
          }
          return response()->json([
            'room info '=> $results,
            'room info is saved successfully '=>'message' 
        ]);  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
        Room::find($room)->delete();

    }
}

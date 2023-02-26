<?php

namespace App\Http\Controllers\hotelsController;
use App\Http\Controllers\Controller;
use App\Models\Room;
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
        
        return isset($rooms)?$rooms:"";
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
            'available_rooms '=>'required',
            'type'=>'required',
        ]);
        $roomPrice = $request['price'];
        $available_rooms =$request['available_rooms'];
        $type = $request['type'];
        $hotel = room::create([
            'price' => $roomPrice,
            'available_rooms' =>$available_rooms,
            'type' =>$type
        ]);
        return $hotel; 
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
        return $room;  
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
          if($request['price']&&$request['available_rooms']&& $request['type']){
              $results=Room::where ('id',$room)->update([
                  'price'=> $request['price'], 
                  'available_rooms' => $request['available_rooms'],
                  'type'=> $request['type'], 
                ]);
          }
          return $results;
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

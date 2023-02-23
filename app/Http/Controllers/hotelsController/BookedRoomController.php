<?php

namespace App\Http\Controllers;

use App\Models\BookedRoom;
use App\Models\Hotel;
use Illuminate\Http\Request;

class BookedRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // in hotl owner dashboard 
      $bookedRoom =BookedRoom::all();
        
        return isset($bookedRoom)?$bookedRoom:"";

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
            'n_of_booked_rooms'=>'required',
            'n_of_adults '=>'required',
            
        ]);
        $nOfBookedRooms = $request['n_of_booked_rooms'];
        $nOfAdults =$request['n_of_adults'];
        $nOfChild = isset($request['n_of_childeren'])?$request['n_of_childeren']:0;
        $booking = BookedRoom::create([
            'n_of_booked_rooms' => $nOfBookedRooms,
            'n_of_adults' =>$nOfAdults,
            'n_of_childeren' => $nOfChild,
        ]);
        return $booking; 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\booked_room  $booked_room
     * @return \Illuminate\Http\Response
     */
    public function show(BookedRoom $bookedRoom)
    {
        $room = Hotel::find($bookedRoom);
        return $room;
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\booked_room  $booked_room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BookedRoom $bookedRoom)
    {
        if($request['n_of_booked_rooms']){

            $results=BookedRoom::where ('id',$bookedRoom)->update([
                  'n_of_booked_rooms'=> $request['n_of_booked_rooms'], 
              ]);
          }
          if($request['n_of_adults']){
  
              $results=Hotel::where ('id',$bookedRoom)->update([
                  'n_of_adults'=> $request['n_of_adults'], 
              ]);
          }
          if($request['n_of_booked_rooms']&&$request['n_of_adults']){
              $results=Hotel::where ('id',$bookedRoom)->update([
                  'n_of_booked_rooms'=> $request['n_of_booked_rooms'], 
                  'n_of_adults' => $request['n_of_adults']
              ]);
          }
          return $results;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\booked_room  $booked_room
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookedRoom $bookedRoom)
    {
        BookedRoom::find($bookedRoom)->delete();
    }
}

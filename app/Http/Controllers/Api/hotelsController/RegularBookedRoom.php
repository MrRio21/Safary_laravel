<?php

namespace App\Http\Controllers\hotelsController;
use App\Http\Controllers\Controller;
use App\Models\RegularBookedRoom;

use Illuminate\Http\Request;

class RegularBookedRoomController extends Controller

{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // in hotl owner dashboard 
      $regbookedRoom = RegularBookedRoom::all();
        
        return isset($regbookedRoom)?$regbookedRoom:"";

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
            'n_of_adults'=>'required',
            
        ]);
        
        $check_in = $request['check_in'];
        $check_out =$request['check_out'];
        $n_of_adults =$request['n_of_adults'];
        $nOfChild = isset($request['n_of_childeren'])?$request['n_of_childeren']:0;
        $booking = RegularBookedRoom::create([
            'check_in' => $check_in,
            'check_out' =>$check_out,
            'n_of_childeren' => $nOfChild,
            'n_of_adults' => $n_of_adults
        ]);
        return $booking; 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\booked_room  $booked_room
     * @return \Illuminate\Http\Response
     */
    public function show(RegularBookedRoom $bookedRoom)
    {
        $room = RegularBookedRoom::find($bookedRoom);
        return $room;
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\booked_room  $booked_room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RegularBookedRoom $bookedRoom)
    {
        if($request['status']){

            $results=RegularBookedRoom::where ('id',$bookedRoom)->update([
                  'status'=> $request['status'], 
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
    public function destroy(RegularBookedRoom $bookedRoom)
    {
        RegularBookedRoom::find($bookedRoom)->delete();
    }
}

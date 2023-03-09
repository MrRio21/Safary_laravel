<?php
namespace App\Http\Controllers\hotelsController;
use App\Http\Controllers\Controller;

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
        
        return response()->json([
            'bookedRooms'=>$bookedRoom 
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
            'order_id'=>'required',
            'room_id '=>'required',
            
        ]);
        $booking = BookedRoom::create([
            'order_id' => $request['order_id'],
            'room_id' =>$request['room_id'],
            'n_of_rooms' => $request['n_of_rooms'],
        ]);
        return response()->json([
            'bookedRoom saved successfully'=>$booking 
        ]); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\booked_room  $booked_room
     * @return \Illuminate\Http\Response
     */
    public function show(BookedRoom $bookedRoom)
    {
        $room = BookedRoom::find($bookedRoom);

        return response()->json([
            'bookedRoom info'=>$room 
        ]); 
        
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
     
              $results=BookedRoom::where ('id',$bookedRoom)->update([
                'order_id' => $request['order_id'],
                'room_id' =>$request['room_id'],
                'n_of_rooms' => $request['n_of_rooms'],
                // 'check_in' => $request['check_in'],
                // 'check_out' => $request['check_out'],
              ]);
          
          return response()->json([
            'bookedRoom info'=>$results 
        ]); 
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

        return response()->json([
            'bookedRoom deleted sucessfully'
        ]);
    }
}

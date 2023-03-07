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
->Join("rooms", function($join){
	$join;
})
->where('rooms.id','room_imgs.room_id')
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
        $room = room::create([
            'price' => $request['price'],
            // 'available_rooms' =>$available_rooms,
            'type' =>$request['type'],
            'hotel_id' => $request['hotel_id'],
            'cover_img' => $request['cover_img']->storeAs("public/imgs",md5(microtime()).$request['cover_img']->getClientOriginalName()),
            'check_in' => $request['check_in'],
            'check_out' => $request['check_out']
        ]);

                foreach($request['image'] as $image){

               RoomImg::create([
                'image' =>$image->storeAs("public/imgs",md5(microtime()).$image->getClientOriginalName()),
                'room_id' => $room->id,

            ]);
        }
          $roomImg=RoomImg::where('room_id',$room->id)->get();
        
        return response()->json([
            'room info '=> $room,
            'room imgs'=>$roomImg,
            'message'=>'room info is saved successfully '
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $roomID)
    {

        return response()->json([
            'room info '=> $roomID,
        ]);

    }


    public function update(Request $request, Room $roomID)
    {
        $roomID->update($request->all());
        return response()->json([
            'message'=> 'room updated successfully',
            'room info '=> $roomID,
    ]);



}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $roomID)
    {
        $roomID->delete();
        return response()->json([
            'message'=>'room deleted successfully'
        ]);

    }
}

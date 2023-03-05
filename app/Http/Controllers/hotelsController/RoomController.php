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
        $roomPrice = $request['price'];
        $type = $request['type'];
        $cover_img = $request['cover_img'];
        $hotelID=  $request['hotel_id'];
        $checkIn=  $request['check_in'];
        $checkOut=  $request['check_out'];
        $room = room::create([
            'price' => $roomPrice,
            // 'available_rooms' =>$available_rooms,
            'type' =>$type,
            'hotel_id' => $hotelID,
            'cover_img' => $cover_img->storeAs("public/imgs",md5(microtime()).$cover_img->getClientOriginalName()),
            'check_in' => $checkIn,
            'check_out' => $checkOut
        ]);
        // foreach( $request['image'] as $img){

        //     // dd($img);
        //        RoomImg::create([
        //             'image'=> $img->storeAs("public/imgs",md5(microtime()).$img->getClientOriginalName()),
        //             'room_id'=>$room->id
        //             // 
        //           ]);
        
        // }
        // tries 
        $imagesArray=$request->file('image');
        // dd($imagesArray);
      
                foreach($imagesArray as $image){
 dd($image);
            // $image ->storeAs("public/imgs",md5(microtime()).$image->getClientOriginalName());
            // $request["img"]->storeAs("public/imgs",$img);
            // $hotelId = $hotel->id;
            // dd($image);
            RoomImg::create([
                'image' => md5(microtime()).$image->getClientOriginalName(),
                'room_id' => 1,
               
            ]);
        }
    
        // return 'the
        return response()->json([
            // 'room info '=> $room,
            'room info is saved successfully '=>'message' 
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
              'room updated successfully'=>$roomID  
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

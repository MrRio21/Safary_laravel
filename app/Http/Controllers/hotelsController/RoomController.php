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
                foreach($request['image'] as $image){
//  dd($image);
            // $image ->storeAs("public/imgs",md5(microtime()).$image->getClientOriginalName());
            // $request["img"]->storeAs("public/imgs",$img);
            // $hotelId = $hotel->id;
            // dd($image);
            $hotelImg = room_imgs::create([
                'image' => md5(microtime()).$image->getClientOriginalName(),
                'room_id' =>$room->id,
               
            ]);
        }
    
        // return 'the
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
          //  dd($image);
            // $image ->storeAs("public/imgs",md5(microtime()).$image->getClientOriginalName());
            // $request["img"]->storeAs("public/imgs",$img);
            // $hotelId = $hotel->id;
            // dd($image);
            $hotelImg = HotelImg::create([
                'image' => md5(microtime()).$image->getClientOriginalName(),
            //    from hotel
                'hotel_id' =>$request["hotel_id"],

                
                //             ]);
                //         }
                
            ]);  

return 'room info is saved successfully '=>'message' ;
          return response()->json([
            'room info '=> //         foreach($request['image'] as $image){

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

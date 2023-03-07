<?php

namespace App\Http\Controllers\hotelsController;
use App\Http\Controllers\Controller;
use App\Models\RoomImg;
use Illuminate\Http\Request;

class RoomImgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roomImgs = RoomImg::all();
        return $roomImgs;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
             // the hashing to ignore the conflicts in names 
             $img = md5(microtime()).$request['image']->getClientOriginalName();
             // $request["img"]->storeAs("public/imgs",$img);
             $roomId = $request['room_id'];
             $hotelImg = RoomImg::create([
                 'image' => $img,
                 'room_id' =>$roomId,
                
             ]);
             return $hotelImg; 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\room_img  $room_img
     * @return \Illuminate\Http\Response
     */
    public function show(RoomImg $roomImg)
    {
        $imgs = RoomImg::find($roomImg);
        return $imgs;    
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\room_img  $room_img
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RoomImg $roomImg)
    {
        if($request['image']){
            $img = md5(microtime()).$request['image']->getClientOriginalName();

            $results=RoomImg::where ('id',$roomImg)->update([
                  'image'=> $img, 
              ]);
          }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\room_img  $room_img
     * @return \Illuminate\Http\Response
     */
    public function destroy(RoomImg $roomImg)
    {
        RoomImg::find($roomImg)->delete();

    }
}

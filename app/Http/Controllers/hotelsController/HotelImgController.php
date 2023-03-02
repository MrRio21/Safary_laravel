<?php

namespace App\Http\Controllers\hotelsController;
use App\Http\Controllers\Controller;

use App\Models\HotelImg;
use Illuminate\Http\Request;

class HotelImgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
              
        $allImgs=HotelImg::all();
        return $allImgs;
    }

 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // // the hashing to ignore the conflicts in names 
        // $img = md5(microtime()).$request['img']->getClientOriginalName();
        // // $request["img"]->storeAs("public/imgs",$img);
        // $hotelId = $request['hotel_id'];
        // $hotelImg = HotelImg::create([
        //     'img' => $img,
        //     'hotel_id' =>$hotelId,
           
        // ]);
        // return $hotelImg; 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\hotel_img  $hotel_img
     * @return \Illuminate\Http\Response
     */
    public function show(HotelImg $HotelImg)
    {
        $imgs = HotelImg::find($HotelImg);
        return $imgs;    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\hotel_img  $hotel_img
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HotelImg $HotelImg)
    {
        if($request['img']){
            $img = md5(microtime()).$request['img']->getClientOriginalName();

            $results=HotelImg::where ('id',$HotelImg)->update([
                  'image'=> $img, 
              ]);
          }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\hotel_img  $hotel_img
     * @return \Illuminate\Http\Response
     */
    public function destroy(HotelImg $HotelImg)
    {
        HotelImg::find($HotelImg)->delete();
    }
}

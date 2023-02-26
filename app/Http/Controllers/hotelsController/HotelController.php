<?php

namespace App\Http\Controllers\hotelsController;
use App\Http\Controllers\Controller;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allHotels =Hotel::all();

        return isset($allHotels)?$allHotels:"";
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name'=>'required',
            'address '=>['required','min:10'],
            'type'=>'required',
        ]);
        $hotelName = $request['name'];
        $address =$request['address'];
        $type = $request['type'];
        $hotel = hotel::create([
            'name' => $hotelName,
            'address' =>$address,
            'type' =>$type,
        ]);
        return $hotel;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\hotel
     * @return \Illuminate\Http\Response
     */
    public function show(Hotel $hotelId)
    {
        $targetedHotel = Hotel::find($hotelId);
        return $targetedHotel;
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request
     * @param  \App\Models\hotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, hotel $hotelId)
    {
        if($request['name']){

          $results=Hotel::where ('id',$hotelId)->update([
                'name'=> $request['name'],
            ]);
        }
        if($request['description']){

            $results=Hotel::where ('id',$hotelId)->update([
                'name'=> $request['description'],
            ]);
        }
        if($request['name']&&$request['address']){
            $results=Hotel::where ('id',$hotelId)->update([
                'name'=> $request['name'],
                'address' => $request['address']
            ]);
        }
        return $results;


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(hotel $hotelId)
    {
        Hotel::find($hotelId)->delete();
    }
}

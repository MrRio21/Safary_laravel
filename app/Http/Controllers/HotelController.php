<?php

namespace App\Http\Controllers;

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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // only showing the html (the form in the dashboard)
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
            'type' =>$type
        ]);
        return $hotel; 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show(Hotel $hotelId)
    {
        $targetedHotel = Hotel::find($hotelId);
        return $targetedHotel;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit(Hotel $hotel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, hotel $hotelId)
    {
        if($request['name']){

            Hotel::find($hotelId)->update([
                'name'=> $request['name'], 
            ]);
        }
        if($request['name']&&$request['address']){
            
        }
        return     ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(hotel $hotel)
    {
        //
    }
}

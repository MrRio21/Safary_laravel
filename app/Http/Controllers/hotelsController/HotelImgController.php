<?php

namespace App\Http\Controllers;

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
              
        $allImgs=HotelImg::find();
        return $allImgs;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
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
        return $imgs;    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\hotel_img  $hotel_img
     * @return \Illuminate\Http\Response
     */
    public function edit(HotelImg $HotelImg)
    {
        //
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
        //
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

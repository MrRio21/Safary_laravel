<?php

namespace App\Http\Controllers\placesController;
use App\Http\Controllers\Controller;
use App\Models\PlaceImg;
use App\Models\Place;
use Illuminate\Http\Request;

class PlaceImgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allPlaceImgs=PlaceImg::all();
        return $allPlaceImgs;
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
        // the hashing to ignore the conflicts in names 
        foreach ($request['img'] as  $img) {
            // dd($value->getClientOriginalName());
            $img ->storeAs("public/imgs",md5(microtime()).$img->getClientOriginalName());
            PlaceImg::create([
                'image' => $img,
                'place_id' =>$request['place_id'],
               
            ]);
        }
        return "all Imgs are saved "; 
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\place_img  $place_img
     * @return \Illuminate\Http\Response
     */
    public function show(PlaceImg $placeImg)
    {
        $imgs = PlaceImg::find($placeImg);
        return $imgs;   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\place_img  $place_img
     * @return \Illuminate\Http\Response
     */
    public function edit(PlaceImg $place_img)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\place_img  $place_img
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Place $placeId)
    {
        if($request['img']){
            $img = md5(microtime()).$request['img']->getClientOriginalName();

            $results=PlaceImg::where ('place_id',$placeId)->update([
                  'image'=> $img, 
              ]);
          }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\place_img  $place_img
     * @return \Illuminate\Http\Response
     */
    public function destroy(PlaceImg $place_img)
    {
        PlaceImg::find($place_img)->delete();
    }
}

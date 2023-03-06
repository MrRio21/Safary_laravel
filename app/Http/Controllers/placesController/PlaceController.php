<?php

namespace App\Http\Controllers\placesController;
use App\Http\Controllers\Controller;
use App\Models\Place;
use Illuminate\Http\Request;
use App\Models\PlaceImg;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $places= Place::all();
        return response()->json([
            'allPlaces '=> $places,
           
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
            'name'=>'required',
            'description'=>['required','min:10'],
            // 'price'=>'numric'
        ]);
// dd($request['image']);
        $place = Place::create([
            'name' => $request['name'],
            'description' =>$request['description'],
            'price' =>$request['price'],
            'cover_img' =>$request['cover_img']->storeAs("public/imgs",md5(microtime()).$request['cover_img']->getClientOriginalName()),
            'type'=>$request['type']
        ]);
        
        foreach( $request['image'] as $img){

            // dd($img);
               PlaceImg::create([
                    'image'=> $img->storeAs("public/imgs",md5(microtime()).$img->getClientOriginalName()),
                    'place_id'=>$place->id
                    // 
                  ]);
        
        }
        $placeImgs= PlaceImg::where('place_id',$place->id)->get();
        return response()->json([
            'place info '=> $place,
            'place img'=>$placeImgs,
            'message'=>'place info is saved successfully ' 
        ]);  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\place  $place
     * @return \Illuminate\Http\Response
     */
    public function show(Place $placeID)
    {
        // $place = Place::find($placeID);
        // dd($placeID);
        return  response()->json([
            'place info '=> $placeID,
            'message' =>'place info is saved successfully '
        ]);  
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\place  $place
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Place $placeID)
    {
        // $place=Place::find($place);
        $placeID->update($request->all());
        // dd($placeID->id);
        return response()->json([
              'place updated successfully'=>$placeID
          ]);
        
         
          }
  
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\place  $place
     * @return \Illuminate\Http\Response
     */
    public function destroy(Place $placeID)
    {
        $placeID->delete();
        // Place::find($placeID)->delete();
       
        return response()->json([
            'message' =>'place deleted'
        ]);
    }
}

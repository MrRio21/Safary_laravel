<?php

namespace App\Http\Controllers\placesController;
use App\Http\Controllers\Controller;
use App\Models\Place;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Place::all();
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

        $place = Place::create([
            'name' => $request['name'],
            'description' =>$request['description'],
            'price' =>$request['price'],
        ]);
        return $place; 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\place  $place
     * @return \Illuminate\Http\Response
     */
    public function show(Place $place)
    {
        $place = Place::find($place);
        return $place;
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\place  $place
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Place $place)
    {
        if($request['name']){

            $results=Place::where ('id',$place)->update([
                  'name'=> $request['name'],
              ]);
          }
          if($request['description']){
  
              $results=Place::where ('id',$place)->update([
                  'description'=> $request['description'],
              ]);
          }
          if($request['price']){
  
              $results=Place::where ('id',$place)->update([
                  'price'=> $request['price'],
              ]);
          }
          if($request['name']&&$request['description']&&$request['price']){
              $results=Place::where ('id',$place)->update([
                  'name'=> $request['name'],
                  'description' => $request['description'],
                  'price'=> $request['price'],

                ]);
          }
          return $results;
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\place  $place
     * @return \Illuminate\Http\Response
     */
    public function destroy(Place $place)
    {
        Place::find($place)->delete();

    }
}

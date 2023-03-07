<?php

namespace App\Http\Controllers\tripController;
use App\Http\Controllers\Controller;
use App\Models\trip;
use App\Models\TripImg;
use Illuminate\Http\Request;

class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allTrips =Trip::all();
        $tripImg=TripImg::all();

        // dd($allHotels);

        return response()->json([
            'allTrips'=>$allTrips,
            'allTrips'=>$tripImg
        ]);
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
        $trip = Trip::create([
            'description' => $request['description'],
            'price' => $request['price'],
            'n_of_people' =>$request['n_of_people'],
            'n_of_places' =>$request['n_of_places'],
            'n_of_days' => $request['n_of_days'],
            'cover_img'=>$request['cover_img']->storeAs("public/imgs",md5(microtime()).$request['cover_img']->getClientOriginalName())
          ]);
        //   loop
        // if the loop didn't be managed
        // we can handle it by sending two routes
// dd(is_file($request['image'])); //true
foreach( $request['image'] as $img){

    // dd($img);
       TripImg::create([
            'image'=> $img->storeAs("public/imgs",md5(microtime()).$img->getClientOriginalName()),
            'trip_id'=>$trip->id
            // 
          ]);

}
       
          return response()->json([
            //   'Trips'=>$trip ,
              'message'=> 'trip info is saved successfully '
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function show(Trip $trip)
    {
        $tripImgs=TripImg::where('trip_id',$trip->id)->get();
        $tripPlaces=TripImg::where('trip_id',$trip->id)->get();
        return response()->json([
            'Trip'=>$trip,
            'trip image'=>$tripImgs

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function edit(trip $trip)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trip $trip)
    {
        $trip->update($request->all());
        return response()->json([
              'trip updated successfully'=>$trip
          ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function destroy(trip $trip)
    {
         Trip::find($trip)->delete();
         return response()->json([
            'trip deleted'
        ]);
    }
}

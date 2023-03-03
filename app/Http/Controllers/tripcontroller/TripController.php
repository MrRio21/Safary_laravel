<?php

namespace App\Http\Controllers\tripcontroller;
use App\Http\Controllers\Controller;
use App\Models\trip;
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
        $allTrips =trip::all();
      
        // dd($allHotels);6

        return response()->json([
            'allTrips'=>$allTrips 
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
        $trip = trip::create([
            'description' => $request['description'],
            'n_of_people' =>$request['n_of_people'],
            'n_of_places' =>$request['n_of_places'],
            'num_of_days' => $request['num_of_days'],
          ]);
          return response()->json([
              'Trips'=>$trip ,
              'message'=> 'hotel info is saved successfully '
        ]); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function show(trip $trip)
    {
        return response()->json([
            'Trips'=>$trip   
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
    public function update(Request $request, trip $trip)
    {
        $trip->update($request->all());
        return response()->json([
              'hotel updated successfully'=>$trip  
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
         trip::find($trip)->delete();
         return response()->json([
            'trip deleted'
        ]); 
    }
}

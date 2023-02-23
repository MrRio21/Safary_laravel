<?php

namespace App\Http\Controllers;

use App\Models\OrderedPlace;
use App\Models\OrderedPlaces;
use Illuminate\Http\Request;

class OrderedPlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allOrderedPlaces =OrderedPlaces::all();
        
        return isset($allOrderedPlaces)?$allOrderedPlaces:"";
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // take the order in the auth find 
        $hotel = OrderedPlaces ::create([
            'order_id' => $request['order_id'],
            'place_id' =>$request[''],
            
        ]);
        return $hotel; 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ordered_place  $ordered_place
     * @return \Illuminate\Http\Response
     */
    public function show(OrderedPlace $ordered_place)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ordered_place  $ordered_place
     * @return \Illuminate\Http\Response
     */
    public function edit(OrderedPlace $ordered_place)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ordered_place  $ordered_place
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrderedPlace $ordered_place)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ordered_place  $ordered_place
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrderedPlace $ordered_place)
    {
        //
    }
}

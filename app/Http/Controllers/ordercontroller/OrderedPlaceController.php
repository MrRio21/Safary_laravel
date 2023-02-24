<?php

namespace App\Http\Controllers;

use App\Http\Resources\user as ResourcesUser;
use App\Models\Order;
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
        $orderedPlace = OrderedPlaces ::create([
            'order_id' => $request['order_id'],
            'place_id' =>$request[''],
            
        ]);
        return $orderedPlace; 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ordered_place  $ordered_place
     * @return \Illuminate\Http\Response
     */
    public function show(Order $orderId)
    { 
        // to show the places that the user choose
        $orderedplaces = OrderedPlaces::where('order_id',$orderId);
        return $orderedplaces;
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ordered_place  $ordered_place
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $orderId)
    {
        if($request['place_id']){

            $results=OrderedPlaces::where ('order_id',$orderId)->update([
                  'place_id'=> $request['place_id'],
              ]);
          }  
          return $results;
     }
  
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ordered_place  $ordered_place
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $orderId)
    {
        OrderedPlaces::where ('order_id',$orderId)->delete();

    }
}

<?php

namespace App\Http\Controllers\orderController;
use App\Http\Controllers\Controller;
use App\Http\Resources\user as ResourcesUser;
use App\Models\BookedRoom;
use App\Models\Order;
use App\Models\OrderedPlaces;
use Illuminate\Http\Request;
use DateTime;
use Illuminate\Support\Facades\DB;
use App\Models\Place;
use Illuminate\Database\Query\JoinClause;


class OrderedPlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       $order= Order::find($request['order_id']);

    
    //    check if the user book room or not 
    // to know the rest of the budget 
    $booked = BookedRoom::where('order_id',$request['order_id'])->limit(1)->get();
if(is_null($booked[0]->id)){
    $budget= $order->budget ;
   
}else{
    $budget = $request['restOfMaxBudget']+($order->budget *0.4);
}
   $availablePlaces =DB::table("places")
->where("price", "<=", $budget)
->get();
      
       
return response()->json([
    'order'=>$order,
    'places available'=>$availablePlaces,
    
    
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
    //   loop => array of places to be saved -------
    $nOfPlacesArray=explode(',', $request['place_id']);
    for($i=0; $i < count( $nOfPlacesArray) ; $i++) {
        $orderedPlace = OrderedPlaces ::create([
            'order_id' => $request['order_id'],
            'place_id' =>$request['place_id'],
            
        ]);
    }
        $order= Order::find($request['order_id']);

       
         
        // the rest after booking the places 

        $totalPaidinAllPlaces= DB::table("places")
        ->select(DB::raw('sum(places.price)as sum'))
        ->join('ordered_places','places.id', '=', 'ordered_places.place_id')
                ->where('ordered_places.order_id', '=', $order->id)
             ->get();

        return response()->json([
            'ordered Place'=>$orderedPlace,
            'totalPaidinAllPlaces'=>$totalPaidinAllPlaces[0]->sum
            
         ]);
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
        return response()->json([
    'ordered places'=>$orderedplaces,
    
        ]) ;
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ordered_place  $ordered_place
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $OrderedPlaces= OrderedPlaces::where('order_id',$request['order_id'])->get();
        //    echo $OrderedPlace->id;
        
        $nOfPlacesArray=explode(',', $request['place_id']);
        for($i=0; $i < count( $nOfPlacesArray) ; $i++) {
            $count= DB::table("ordered_places")
            ->select(DB::raw('count(place_id)as count'))->where('order_id','=',$request['order_id'])
            ->get();
            // dd($count[0]->count);
            // dd($nOfPlacesArray);
            
            if($count[0]->count = count($nOfPlacesArray)){
                 foreach($OrderedPlaces as $OrderedPlace){
                   
                        $OrderedPlace->update([
                            'place_id'=>(int)$nOfPlacesArray
                        ]);
                    }
             }
             else{
                OrderedPlaces ::create([
                    'order_id' => $request['order_id'],
                    'place_id' =>(int)$nOfPlacesArray
                    
                ]);
             }
            
         
        }
           
        
        
        return response()->json([
              'OrderedPlaces updated successfully'=>$OrderedPlaces  
          ]);  
       }
    
       
  
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ordered_place  $ordered_place
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $nOfPlacesArray=explode(',', $request['place_id']);
        
        $orderedPlaces= OrderedPlaces::where ('place_id','=',$request['place_id'])->where('order_id','=',$request['order_id'])->get();
        for($i=0; $i < count( $nOfPlacesArray) ; $i++) {
       foreach($orderedPlaces as $orderedPlace){
        $orderedPlace->delete();
       }
        }

    }
}

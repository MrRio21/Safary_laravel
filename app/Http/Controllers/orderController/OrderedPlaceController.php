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

    foreach($request['place_id'] as $placeID){
        // dd($placeID);
        // echo"here";
         OrderedPlaces ::create([
                    'order_id' => $request['order_id'],
                    'place_id' =>$placeID,
        ]);
    }
        $order= Order::find($request['order_id']);
        $orderedPlaces = OrderedPlaces ::where('order_id',$request->order_id)->get();
       
         
        // the rest after booking the places 

        $totalPaidInAllPlaces= DB::table("places")
        ->select(DB::raw('sum(places.price)as sum'))
        ->join('ordered_places','places.id', '=', 'ordered_places.place_id')
                ->where('ordered_places.order_id', '=', $order->id)
             ->get();

        return response()->json([
            'ordered Place'=>$orderedPlaces,
            'totalPaidInAllPlaces'=>$totalPaidInAllPlaces[0]->sum
            
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
        // dd($orderId->id);
        // to show the places that the user choose
        $orderedplaces = OrderedPlaces::where('order_id',$orderId->id)->get();
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
    public function update(Order $orderId, Request $request)
    {
    //    dd($request->totalPaidInAllPlaces);
        // $availablePlacesForUser = DB::table('places')
        // ->where('price','<=',$request->totalPaidInAllPlaces)->get();
// dd( $availablePlacesForUser);
        $OrderedPlaces= OrderedPlaces::where('order_id',$orderId->id)->get();
        //    echo $OrderedPlace->id;
        // dd($request);
        // dd(count($OrderedPlaces));
        
        foreach($OrderedPlaces as $orderedPlace){
            // dd($orderedPlace);
            foreach($request['place_id'] as $place){
                //  echo (int)$place;
                $orderedPlace->update([(int)$place]);
                // dd($orderedPlace);
            }

        }
        // dd($OrderedPlaces[0]->update());
        // dd($orderId);
        // $OrderedPlaces[0]->update([$request->all()]);        // $nOfPlacesArray=explode(',', $request['place_id']);
        for($i=0; $i < count( $request->place_id) ; $i++) {
            $count= DB::table("ordered_places")
            ->select(DB::raw('count(place_id)as count'))->where('order_id','=',$orderId->id)
            ->get();
            dd($count[0]->count);
            // dd($nOfPlacesArray);
            
            // if($count[0]->count = count($nOfPlacesArray)){
            //      foreach($OrderedPlaces as $OrderedPlace){
                   
            //             $OrderedPlace->update([
            //                 'place_id'=>(int)$nOfPlacesArray
            //             ]);
            //         }
            //  }
            //  else{
            //     OrderedPlaces ::create([
            //         'order_id' => $request['order_id'],
            //         'place_id' =>(int)$nOfPlacesArray
                    
            //     ]);
            //  }
            
         
        }
           
        
        
        return response()->json([
              'OrderedPlaces updated successfully'=>$OrderedPlaces[0]  
          ]);  
       }
    
       
  
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ordered_place  $ordered_place
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $orderId,Request $request)
    { 
        // dd($request['place_id']->delete());
        foreach($request->place_id as $orderedPlaceID){
            $orderedPlace= OrderedPlaces::where('order_id',$orderId->id)->where('place_id',$orderedPlaceID)->first();
            // dd($orderedPlace->delete());
           $orderedPlace->delete();
           

        }
   
   }
}

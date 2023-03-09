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
    public function index(Order $orderID,Request $request)
    {

        $totalPaidInBookingPerDay= DB::table("rooms")
               ->select(DB::raw('sum(rooms.price)as sum'))
               ->join('booked_rooms','rooms.id', '=', 'booked_rooms.room_id')
                // $order = Order::find($request['order_id']);
        
                       ->where('booked_rooms.order_id', '=', $orderID->id)
              ->get();
        // dd($totalPaidInBookingPerDay[0]);
                    $totalPaidInRooms= $totalPaidInBookingPerDay[0]->sum*$orderID->n_of_days ;
                    // dd($totalPaidInRooms);
                    // dd($orderID->n_of_days);
                    $restOfMaxBudget = ($orderID->budget * 0.6) - $totalPaidInRooms;
                    // dd($restOfMaxBudget);
                    if($restOfMaxBudget >0){
                        return redirect()->route('availablePlaces.index',['orderID'=>$orderID->id]);
                    }else{
                        return redirect()->route('MUT.create',['orderID'=>$orderID->id]);
                    }
      
    //    check if the user book room or not 
    // to know the rest of the budget 
    $booked = BookedRoom::where('order_id',$orderID->id)->first();
if(is_null($booked)){

    $budget= $orderID->budget ;
   
}else{
    $budget = $request['restOfMaxBudget']+($orderID->budget *0.4);
}
   $availablePlaces =DB::table("places")
->where("price", "<=", $budget)
->get();
      
       
return response()->json([
    'order'=>$orderID->id,
    'availablePlaces'=>$availablePlaces,
    'restOfBudgetAfterBookingRooms'=>$budget

 ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Order $orderID,Request $request)
    {
        if(is_array($request['place_id'])){
         foreach($request['place_id'] as $placeID)
        {
        // dd($placeID);
        // echo"here";
         OrderedPlaces ::create([
                    'order_id' =>  $orderID->id,
                    'place_id' =>$placeID,
        ]);
        }
          }
// the rest after booking the places 
        $orderedPlaces = OrderedPlaces ::where('order_id',$orderID->id)->get();
       
         

        $totalPaidInAllPlaces= DB::table("places")
        ->select(DB::raw('sum(places.price)as sum'))
        ->join('ordered_places','places.id', '=', 'ordered_places.place_id')
                ->where('ordered_places.order_id', '=',$orderID->id)
             ->get();
            //  dd($totalPaidInAllPlaces[0]->sum);
            $restOfBudgetAfterBookingRooms= $request->restOfBudgetAfterBookingRooms;
            if( $restOfBudgetAfterBookingRooms = $orderID->budget){
                $restOfBudget = $orderID->budget - $totalPaidInAllPlaces[0]->sum;
            }
            else{

                $restOfBudget = $orderID->budget - ($totalPaidInAllPlaces[0]->sum + $restOfBudgetAfterBookingRooms);
            }
            //  dd($totalPaidInAllPlaces[0]->sum+ $request->restOfBudgetAfterBookingRooms);
            // dd($restOfBudget);
             
             if($restOfBudget>=0){

        return response()->json([
       'orderedPlaces'=>$orderedPlaces,
       'totalPaidInAllPlaces'=>$totalPaidInAllPlaces[0]->sum,
       'restOfBudget'=>$restOfBudget
       
    ]);
    }else{
        $query='delete from ordered_places where order_id ='.$orderID->id;
        DB::delete($query);
           return response()->json([
               'message'=>'the budget for booking all these places isnot enough to select'

            ]);
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ordered_place  $ordered_place
     * @return \Illuminate\Http\Response
     */
    public function show(Order $orderID)
    { 
        // dd($orderId->id);
        // to show the places that the user choose
        $orderedplaces = OrderedPlaces::where('order_id',$orderID->id)->get();
        $places = Place::all();
        if(!is_null($orderedplaces)){

            return response()->json([
        'ordered places'=>$orderedplaces,
        'places'=>$places
        
            ]) ;
        }else{
            return response()->json([
                'message'=>'you didnot pick places',
                
                    ]) ;
        }
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
        if(is_array($request['place_id'])){

            foreach($request['place_id'] as $placeID){
    
                $roomBooked= DB::table('ordered_places')
                ->where('order_id',$orderId->id)
                ->where('place_id',$placeID)
                ->delete();
            //    dd($roomBooked);
               }
               
$this->store($orderId,$request);
            }
        $placeOrdered= DB::table('ordered_places')
        ->where('order_id',$orderId->id)->get();
       dd($placeOrdered);
return response()->json([
     'placeOrdered'=>$placeOrdered,
     'message'=>'updated successfully'
 ]);


}  
       
  
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ordered_place  $ordered_place
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $orderID,Request $request)
    { 
        // dd($request['place_id']->delete());
        if(is_array($request['place_id'])){

            foreach($request['place_id'] as $placeID){
    
                $query='delete from ordered_places where order_id ='.$orderID->id.' and place_id ='.$placeID;
                DB::delete($query);
                // $placeSelected= DB::table('ordered_places')
                // ->where('order_id',$orderID->id)
                // ->where('place_id',$placeID)
                // ->delete();
            //    dd($placeSelected);
               }
        }else{
            $query='delete from ordered_places where order_id ='.$orderID->id.' and place_id ='.$request['place_id'];
            DB::delete($query);
            // $placeSelected= DB::table('ordered_places')
            // ->where('order_id',$orderID->id)
            // ->where('place_id',$request['place_id'])
            // ->delete();
        }
           return response()->json([
            'mesaage '=>'Booking deleted successfully'
        ]);
   
   }
}

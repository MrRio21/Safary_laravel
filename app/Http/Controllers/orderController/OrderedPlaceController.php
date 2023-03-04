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

       $check_out_datetime = new DateTime($order->check_out);
       $check_in_datetime = new DateTime($order->check_in);
       $interval = $check_in_datetime->diff($check_out_datetime);
       $nOfDays = $interval->format('%a');//and then print do whatever you like with $final_days
        
       
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
    'number of stayed days'=>$nOfDays
    
    
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
        $orderedPlace = OrderedPlaces ::create([
            'order_id' => $request['order_id'],
            'place_id' =>$request['place_id'],
            
        ]);
        $order= Order::find($request['order_id']);

        $check_out_datetime = new DateTime($order->check_out);
        $check_in_datetime = new DateTime($order->check_in);
        $interval = $check_in_datetime->diff($check_out_datetime);
        $nOfDays = $interval->format('%a');//and then print do whatever you like with $final_days
         
        // the rest after booking the places 

        $totalPaidinAllPlaces= DB::table("places")
        ->select(DB::raw('sum(places.price)as sum'))
        ->join('ordered_places', function (JoinClause $join ,Request $request) {
         $order = Order::find($request['order_id']);
 
           $join->on('places.id', '=', 'ordered_places.place_id')
 
                ->where('ordered_places.order_id', '=', $order->id);
       })->get();

        return response()->json([
            'ordered Place'=>$orderedPlace,
            'totalPaidinAllPlaces'=>$totalPaidinAllPlaces
            
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
        return $orderedplaces;
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ordered_place  $ordered_place
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrderedPlaces $OrderedPlaces)
    {
        $OrderedPlaces->update($request->all());
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
        OrderedPlaces::where ('place_id',$request['place_id'])->delete();

    }
}

<?php


namespace App\Http\Controllers\orderController;

use App\Http\Controllers\Controller;
use App\Models\BookedRoom;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use DateTime;
// use Illuminate\Support\Facades\Date;
use App\Models\Order;
use App\Models\Hotel;
use Illuminate\Database\Query\JoinClause;
use function PHPUnit\Framework\isNull;
use App\Models\Room;
use DATEDIFF;

class BookedRoomController extends Controller
{
    public function index(Order $orderID)
    {
        // dd($order);
        $budget = $orderID->budget*0.6;
// dd($budget);
        $budgetPerDay = $budget / $orderID->n_of_days;
// dd($budgetPerDay);
$n_days=(int)$orderID->n_of_days;
// dd($n_days);

$availableRooms = DB::table('rooms')
->whereNull('check_out')
->whereNull('check_in')
 ->orWhere('check_out','<>',$orderID->check_out)
->orWhere('check_in','<>',$orderID->check_in)
->where('price','<=',$budgetPerDay)
// ->where('price' * $n_days,'*',$budget)
// ->whereNotBetween('check_in',[$order->check_in,$order->check_out])
// ->whereNotBetween('check_out',[$order->check_in,$order->check_out])

->get();
// dd($availableRooms);

        $hotels = Hotel::all();
        if(!is_null($availableRooms)){

            return response()->json([
                'availableRooms' => $availableRooms,
                'hotels' => $hotels,
                'order' => $orderID

            ]);
        }else{
            return response()->json([
                'message' => "increase your budget or derease or change number of days you want to stay",


            ]);
        }
    }
    public function store(Order $orderID,Request $request)
    {
        if(is_array($request['room_id'])){
       foreach($request['room_id'] as $roomID){

           BookedRoom::create([
               'order_id' => $orderID->id,
               'room_id' => $roomID
   
           ]);
       }
    }
       $totalPaidInBookingPerDay= DB::table("rooms")
       ->select(DB::raw('sum(rooms.price)as sum'))
       ->join('booked_rooms','rooms.id', '=', 'booked_rooms.room_id')
        // $order = Order::find($request['order_id']);

               ->where('booked_rooms.order_id', '=', $orderID->id)
      ->get();
// dd($totalPaidInBookingPerDay[0]);
            $totalPaidInRooms= $totalPaidInBookingPerDay[0]->sum*$orderID->n_of_days ;
            $restOfMaxBudget = ($orderID->budget * 0.6) -$totalPaidInRooms;
            if($restOfMaxBudget >=0 ){

                return response()->json([
                    'order'=>$orderID,
                    'restOfMaxBudget' =>$restOfMaxBudget,
                    'totalPaidInRooms'=>$totalPaidInRooms
    
                 ]);
            }else{

            $query1='delete from booked_rooms where order_id ='.$orderID->id;
            DB::delete($query1);
            $query2='delete from ordered_room where order_id ='.$orderID->id;
            // dd($roomOrdered->delete());
            DB::delete($query2);
                }
                return response()->json([
                    'message'=>'the budget for hotels isnot enough to book'
   
                 ]);
            }




    public function update(Request $request, Order $orderID)
    {
    
                DB::table('booked_rooms')
                ->where('order_id',$orderID->id)
                ->delete();

$this->store($orderID,$request);
            
            $roomsBooked= DB::table('booked_rooms')
            ->where('order_id',$orderID->id)->get();

        return response()->json([
              'roomBooked'=>$roomsBooked,
              'message'=>'updated successfully'
          ]);
     }

     public function destroy(Order $orderID,Request $request)
     {

        // dd($request['room_id']);
        if(is_array($request['room_id'])){

            foreach($request['room_id'] as $roomID){
         $query='delete from booked_rooms where order_id ='.$orderID->id.' and room_id ='.$roomID;
        DB::delete($query);
        $query2='delete from ordered_room where order_id ='.$orderID->id.' and room_id ='.$roomID;
        // dd($roomOrdered->delete());
        DB::delete($query2);
               }
        }else{
            $query='delete from booked_rooms where order_id ='.$orderID->id.' and room_id ='.$request['room_id'];
            DB::delete($query);
            
        }
           return response()->json([
            'mesaage '=>'Booking deleted successfully'
        ]);

     }

     public function show(Order $orderID)
     { 
         // dd($orderId->id);
         // to show the places that the user choose
         $orderedRooms = BookedRoom::where('order_id',$orderID->id)->get();
         $hotels = Hotel::all();
         if(!is_null($orderedRooms)){

             return response()->json([
         'orderedRooms'=>$orderedRooms,
         'hotels'=>$hotels
         
             ]) ;
         }else{
            return response()->json([
                'message'=>'you didnot pick  rooms',

                    ]) ;
         }
     }
}

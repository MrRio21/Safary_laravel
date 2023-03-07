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
;
        $budget = $orderID->budget*0.6;

        $budgetPerDay = $budget / $orderID->n_of_days;
// dd($budgetPerDay);
$n_days=(int)$orderID->n_of_days;
// dd($n_days);

$availableRooms = DB::table('rooms')
->where('price','<=',$budgetPerDay)
// ->where('price' * $n_days,'*',$budget)
// ->whereNotBetween('check_in',[$order->check_in,$order->check_out])
// ->whereNotBetween('check_out',[$order->check_in,$order->check_out])
->where('check_in','=',null)
->orWhere('check_in','<>',$orderID->check_in)
 ->where('check_out','=',null)
 ->orWhere('check_out','<>',$orderID->check_out)
->get();
// dd($availableRooms);

        $hotels = Hotel::all();
        if(!is_null($availableRooms)){

            return response()->json([
                'available rooms' => $availableRooms,
                'all hotels' => $hotels,
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
       foreach($request['room_id'] as $roomID){

           BookedRoom::create([
               'order_id' => $orderID->id,
               'room_id' => $roomID
   
           ]);
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
                foreach($request['room_id'] as $roomID){

                 $roomBooked= DB::table('booked_rooms')
                 ->where('order_id',$orderID->id)
                 ->where('room_id',$roomID)
                 ->delete();
                dd($roomBooked);
                }
                return response()->json([
                    'message'=>'the budget for hotels isnot enough to book'
   
                 ]);
            }
    }



    public function update(Request $request, Order $orderID,Room $roomID)
    {
        $roomBooked= DB::table('booked_rooms')
                 ->where('order_id',$orderID->id)
                 ->where('room_id',$roomID->id)
                 ->update(
                    [
                        'order_id'=>$orderID->id,
                        'room_id'=>$request['room_id']
                    ]
                 );
                dd($roomBooked);
        return response()->json([
              'roomBooked updated successfully'=>$roomBooked
          ]);
     }

     public function destroy(Order $orderID,Request $request)
     {
        // dd($request['room_id']);
        if(is_array($request['room_id'])){

            foreach($request['room_id'] as $roomID){
    
                $roomBooked= DB::table('booked_rooms')
                ->where('order_id',$orderID->id)
                ->where('room_id',$roomID)
                ->delete();
               dd($roomBooked);
               }
        }else{
            $roomBooked= DB::table('booked_rooms')
            ->where('order_id',$orderID->id)
            ->where('room_id',$request['room_id'])
            ->delete();
        }
           return response()->json([
            'mesaage '=>'Booking deleted successfully'
        ]);

     }
}

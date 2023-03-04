<?php


namespace App\Http\Controllers\orderController;

use App\Http\Controllers\Controller;
use App\Models\BookedRoom;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use DateTime;
use App\Models\Order;
use App\Models\Hotel;
use Illuminate\Database\Query\JoinClause;
use function PHPUnit\Framework\isNull;

class BookedRoomController extends Controller
{
    public function index(Request $request)
    {
        $order = Order::find($request['order_id']);

        $budget = $order->budget;

        $check_out_datetime = new DateTime($order->check_out);
        $check_in_datetime = new DateTime($order->check_in);
        $interval = $check_in_datetime->diff($check_out_datetime);
        $nOfDays = $interval->format('%a'); //and then print do whatever you like with $nOfDays
        //   
        $budgetPerDay = $budget / $nOfDays;
        $availableRooms = DB::table("rooms")
            ->select("id")
            ->where("check_in", "=", 0)
            ->where("check_out", "=", 0)
            ->where("price", "<=", $budgetPerDay)
            ->get();

        $hotels = Hotel::all();
        if(!is_null($availableRooms)){

            return response()->json([
                'available rooms' => $availableRooms,
                'all hotels' => $hotels,
                'order' => $order
    
            ]);
        }else{
            return response()->json([
                'message' => "increase your budget or derease or change number of days you want to stay",
                
    
            ]);
        }
    }
    public function store(Request $request)
    {
        $order = Order::find($request['order_id']);
        
        BookedRoom::create([
            'order_id' => $order->id,
            'room_id' => $request['room_id']

        ]);
       $totalPaidInBookingPerDay= DB::table("rooms")
       ->select(DB::raw('sum(rooms.price)as sum'))
       ->join('booked_rooms', function (JoinClause $join ,Request $request) {
        $order = Order::find($request['order_id']);

          $join->on('rooms.id', '=', 'booked_rooms.room_id')

               ->where('booked_rooms.order_id', '=', $order->id);
      })->get();

            $check_out_datetime = new DateTime($order->check_out);
            $check_in_datetime = new DateTime($order->check_in);
            $interval = $check_in_datetime->diff($check_out_datetime);
            $nOfDays = $interval->format('%a'); //and then print do whatever you like with $nOfDays
           
            $totalPaidInRooms= $totalPaidInBookingPerDay[0]->sum*$nOfDays ;
            $restOfMaxBudget =   ($order->budget * 0.6)-$totalPaidInRooms;
            return response()->json([
                'order'=>$order,
                'restOfMaxBudget' =>$restOfMaxBudget,
                'totalPaidInRooms'=>$totalPaidInRooms
                
             ]);
    }
 


    public function update(Request $request, BookedRoom $BookedRoom)
    {
        $BookedRoom->update($request->all());
        return response()->json([
              'OrderedPlaces updated successfully'=>$BookedRoom  
          ]);  
     }

     public function destroy(Request $request)
     {
         BookedRoom::where ('room_id',$request['room_id'])->delete();
 
     }
}

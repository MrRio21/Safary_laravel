<?php


namespace App\Http\Controllers\orderController;
use App\Http\Controllers\Controller;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use App\Models\BookedRoom;
use App\Models\OrderedPlaces;
use App\Models\BookTourGuide;
use App\Models\Order;
use App\Models\OrderedRoom;
use DateTime;


class OrderDetailsController extends Controller
{
    public function index()
    {
      $OrdersDetail= OrderDetail::all();
      $orders = $OrdersDetail->order;
      return response()->json([
        'OrdersDetail'=>$OrdersDetail,
    ]);
       
    }
    public function store(Order $orderID)
    {
        $roomsType=OrderedRoom::where('order_id',$orderID->id)->get();
        // dd($roomsType);
        $roomsBooked = BookedRoom::where('order_id',$orderID->id)->get();
        // dd($roomsBooked);
        foreach($roomsBooked as $room){
            echo $room;
                }












        // order_id to get all reservations 
        // relations with order to store 
        // user_id to store order 

    }
    public function destroy(OrderDetail $orderID)
    {
       $deleteOrder= OrderDetail::where('order_id',$orderID)->delete();
        if($deleteOrder){
            BookedRoom::where ('order_id',$orderID)->delete();
            BookTourGuide::where ('order_id',$orderID)->delete();
            OrderedPlaces::where ('order_id',$orderID)->delete();
        }

        return response()->json([
            'order deleted'
        ]);

    }
    public function show(Request $request){
         //$order= $request['user_id']->Order
         $order=Order::where('user_id',$request['user_id'])->get();
         // num of days 
                 $check_out_datetime = new DateTime($order->check_out);
                 $check_in_datetime = new DateTime($order->check_in);
                 $interval = $check_in_datetime->diff($check_out_datetime);
                 $nOfDays = $interval->format('%a');//and then print do whatever you like with $final_days
                 //  -----------------
         
                 //  $order->Room
                 $BookedRooms = BookedRoom::where('order_id',$order->id)->get();
                 // $order->Tourguide
                 $BookedTourguide = BookTourGuide::where('order_id',$order->id)->get();
                 // $order->place
                 $orderedPlaces = OrderedPlaces::where('order_id',$order->id)->get();
                
                 return response()->json([
                     'order'=>$order,
                     'BookedRooms'=>isset($BookedRooms)?$BookedRooms:'not found ',
                     'BookedTourguide'=>isset($BookedTourguide)?$BookedTourguide:'not found ',
                     'orderedPlaces'=>isset($orderedPlaces)?$orderedPlaces:'not found '
                 ]);
    }

}

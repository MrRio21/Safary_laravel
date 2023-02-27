<?php

namespace App\Http\Controllers\orderController;
use App\Http\Controllers\Controller;
use App\Models\Room;
use App\Models\BookTourGuide;
use App\Models\OrderDetail;
use Carbon\Carbon;
use DateTime;
use App\Models\Order;
use Illuminate\Http\Request;

    function returnMaxBudget($orderID){
        $order = order::find($orderID);
        $newBudget = ($order['budget'] * 0.6);
        // dd($newBudget);
        return $newBudget;
    }

    function returnDays($orderID){
        $order = order::find($orderID);

        // $checkOut = $order['check_out_d'];
        // $checkIn =$order['check_in_d'];
        //     $days = ($checkOut - $checkIn);
            // dd($days);

 ///////  Carbon   //////////////
            // dd(intval($checkOut));
            // $current = Carbon::now();
            //  $start_time = Carbon::parse($checkOut);
            //  $fin_time = Carbon::parse($checkIn);
            //  $result = $start_time->diffInDays($fin_time, false);
            $check_in =$order['check_in'];
$check_out = $order['check_out'];
$check_in_datetime = new DateTime($check_in);
// dd($first_datetime);
$check_out_datetime = new DateTime($check_out);
$interval = $check_in_datetime->diff($check_out_datetime);
$final_days = $interval->format('%a');//and then print do whatever you like with $final_days
dd($final_days);
    }
    function requestTourGuide( OrderDetail $userID, ){
      $orderDetails =OrderDetail::all();
        foreach($orderDetails as $orderDetail){
            if($orderDetail->user_id ==  $userID && $orderDetail->tourGuide_status == 'pending' ){
                
            }
        }
    }

class OrderController extends Controller
{

    public function index()
    {
     returnMaxBudget(1);
     returnDays(2);


    }

    public function store(Request $request)
    {
        function order(){
    Order::factory()->count(20)->make();
    }
        $request->validate([
            'budget'=>['required','digits_between:3,6'],
        ]);

        $order = Order::create([
            'budget' =>  $request['budget'],
            'check_in' =>$request['check_in'], 
            'check_out' =>$request['check_out'],
            'n_of_adults'=> $request['n_of_adults'],
            'n_of_childeren'=>$request['n_of_childeren'],
            'n_of_rooms'=>$request['n_of_rooms']
        ]);
        // $budget = $order['budget'];
        return $order ;
    }


    public function customization($takeTheBudget,$returnDay)
    {
        if ($takeTheBudget) {

        }
    }


    public function show(order $order)
    {
        $targetedOrder = Order::find($order);
        return $targetedOrder;
    }


    public function destroy(order $order)
    {
        Order::find($order)->delete();
    }
}

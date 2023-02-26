<?php

namespace App\Http\Controllers;
use App\Models\Room;
use Carbon\Carbon;
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

        $checkOut = $order['check_out_d'];
        $checkIn =$order['check_in_d'];
            $days = ($checkOut - $checkIn);
            dd($days);

 ///////  Carbon   //////////////
            // dd(intval($checkOut));
            // $current = Carbon::now();
            //  $start_time = Carbon::parse($checkOut);
            //  $fin_time = Carbon::parse($checkIn);
            //  $result = $start_time->diffInDays($fin_time, false);
    }

class OrderController extends Controller
{

    public function index()
    {

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
            'check_in_d' =>$request['check_in_d'],
            'check_in_m' =>$request['check_in_m'],
            'check_in_y' =>$request['check_in_y'],
            'check_out_d' =>$request['check_out_d'],
            'check_out_m' =>$request['check_out_m'],
            'check_out_y' =>$request['check_out_y'],
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

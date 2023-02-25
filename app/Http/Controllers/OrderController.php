<?php

namespace App\Http\Controllers;
use App\Models\Room;
use App\Models\Order;
use Illuminate\Http\Request;

    function takeTheBudget($budget){
        $newBudget = ($budget * 0.6);
        return $newBudget;
    }
    function returnDay($checkIn,$checkOut){
        if ($checkOut > $checkIn) {
            $day = ($checkOut - $checkIn);
        }
        return $day;
    }

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order = order::all();
        return $order;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */



    public function store(Request $request)
    {
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
        $takeTheBudget = takeTheBudget($order['budget']);
        $returnDay = returnDay($order['check_out'] ,$order ['check_in']);
        return $order ;
    }

    public function customization($takeTheBudget,$returnDay)
    {

    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(order $order)
    {
        $targetedOrder = Order::find($order);
        return $targetedOrder;
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(order $order)
    {
        Order::find($order)->delete();
    }
}

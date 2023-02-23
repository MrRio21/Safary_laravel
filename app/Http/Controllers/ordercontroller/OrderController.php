<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

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
            'budget'=>['required','min:500'],
            
        ]);
    
        $order = Order::create([
            'budget' =>  $request['budget'],
            'check_in' =>$request['check_in'],
            'check_out' =>$request['check_out'],
            'n_of_adults'=> $request['check_out'],
            'n_of_childeren'=>$request['n_of_childeren'],
            'n_of_rooms'=>$request['n_of_rooms']
        ]);
        return $order->id; 
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

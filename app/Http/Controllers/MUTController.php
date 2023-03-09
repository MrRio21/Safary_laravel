<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Auth\registerationController;
use App\Models\BookedRoom;
use App\Models\Hotel;
use App\Models\Order;
use App\Models\Place;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MUTController extends Controller
{
    public function create()
    {
        // dd(Auth::user());

return view('MUT.MUT');
    }
    // stored the order
    
    public function getAvailableHotels(Order $order){
        $budgetperday = $order->budget / $order->n_of_days;

        $availableRooms = Room::where('price','<',$budgetperday)
        ->get();
        // dd($availableRooms);
        if(!is_null($availableRooms)){

            return view('MUT.availableHotelsTest',[
                'availableRooms' => $availableRooms,
                'order' => $order

            ]);
        }else{
            return ([
                'message' => "increase your budget or derease or change number of days you want to stay",


            ]);
        }

    }
   public function getAvailableRooms(Order $order,Request $request,Hotel $hotel)
   {
    //    dd($request->availableRooms);
    //    dd($hotel);
       $availableRooms =$request->availableRooms;
      
       return view('MUT.availableRooms',[
        'availableRooms' => $availableRooms,
        'order' => $order,
        'hotel'=>$hotel

    ]);
   } 
    public function BookInHotel(Order $order , Request $request,Hotel $hotel){
        // dd($hotel);
        // dd($request->room_id);
        // BookedRoom::creat([
        //     'order_id'=>(int)$order->id,
        //     'hotel_id'=>(int)$hotel->id,
        // 'room_id'=>(int)$request->room_id
        // ]);
        $room=Room::find($request->room_id);
        // dd($room);
        $roomBudget = $room->price * $order->n_of_days;
        // dd($roomBudget);
        $restOfBudget= $order->budget-$roomBudget;
        // dd($restOfBudget);

        $availablePlaces= Place::where('price','<',$restOfBudget)->get();
        if(empty($availablePlaces)){
            return view('MUT.availableRooms',[
                'message'=>'there is not enough budget raise it '
        
            ]);
        }
        else{
            return view('MUT.availablePlaces',[
                'availablePlaces' => $availablePlaces,
                'order' => $order,
                'restOfBudget'=>$restOfBudget

        
            ]);
           
        }

    }

}
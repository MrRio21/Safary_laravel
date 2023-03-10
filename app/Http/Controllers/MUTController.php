<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Auth\registerationController;
use App\Models\BookedRoom;
use App\Models\BookTourGuide;
use App\Models\Hotel;
use App\Models\Order;
use App\Models\OrderedPlaces;
use App\Models\Place;
use App\Models\Room;
use App\Models\Tourguide;
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
        //
        // $singleRoomsArray=[];
        // $doubleRoomsArray=[];
        // $TripleRoomArray=[];
        // $RoomsOrdered=[{
        //     's'->$n,
        //     'd'->

        // }];
        
        $order->budget;
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
        BookedRoom::create([
            'order_id'=>(int)$order->id,
            'hotel_id'=>(int)$hotel->id,
        'room_id'=>(int)$request->room_id
        ]);
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
    public function getAvailablePlaces(Order $order){

        $availablePlaces= Place::where('price','<',$order->buget)->get();
        if(empty($availablePlaces)){
            return view('MUT.availableRooms',[
                'message'=>'there is not enough budget raise it '

            ]);
        }
        else{
            return view('MUT.availablePlaces',[
                'availablePlaces' => $availablePlaces,
                'order' => $order,
                'budget'=>$order->buget


            ]);

        }
    }
        public function bookPlaces(Order $order , Request $request ){
            // dd($request);
            if(!empty($request->place_id)){

                foreach($request->place_id as $placeID){
                    // dd($placeID);
                    OrderedPlaces::create([
                        'order_id'=>$order->id,
                        'place_id'=>$placeID
                    ]);
                }
            }
            $totalPaidInPlaces= DB::table("places")
            ->select(DB::raw('sum(places.price)as sum'))
            ->join('ordered_places','places.id', '=', 'ordered_places.place_id')
           ->where('ordered_places.order_id', '=', $order->id)
           ->get();
            // dd($totalPaidInPlaces[0]->sum);
            $restBudgetBeforeTourguide=$request->restOfBudget-$totalPaidInPlaces[0]->sum;
            // dd($restBudget);
            $budgetperday=$restBudgetBeforeTourguide/$order->n_of_days;
            // dd($budgetperday);
            $availableTourguides=Tourguide::where('price_per_day','<',$budgetperday)->get();
            // dd($availableTourguides);

                    if(empty($availableTourguides)){
            return view('MUT.availableTourguides',[
                'message'=>'there is not enough budget raise it '

            ]);
        }
        else{
            return view('MUT.availableTourguides',[
                'availableTourguides' => $availableTourguides,
                'order' => $order,
                'restBudgetBeforeTourguide'=>$restBudgetBeforeTourguide


            ]);

        }
        }
        public function bookWithTourguide(Order $order,Request $request,Tourguide $tourguide){
            // dd($tourguide);
            // dd($request->restBudgetBeforeTourguide);
        //     BookTourGuide::create([
        //    'tourguide_id'=>$tourguide->id,
        //    'order_id'=>$order->id,
        //    'n_of_days'=>$order->n_of_days
        //     ]);
$restOfBudgetAfterAllBooking=$order->budget-($request->restBudgetBeforeTourguide+($tourguide->price_per_day*$order->n_of_days));
dd($restOfBudgetAfterAllBooking);
            return view('MUT.MUTDetails',[
                'order' => $order,


            ]);
        }

    }


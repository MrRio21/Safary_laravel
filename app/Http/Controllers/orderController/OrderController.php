<?php

namespace App\Http\Controllers\orderController;
use App\Http\Controllers\Controller;
use App\Models\Room;
use App\Models\BookTourGuide;
use App\Models\OrderDetail;
use Carbon\Carbon;
use DateTime;
use App\Models\Order;
use App\Models\Tourguide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

function returnDays($orderID){
    $order = order::find($orderID);

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
    function returnMaxBudget($orderID){
        $order = order::find($orderID);
        $newBudget = ($order['budget'] * 0.6);
        $maxBudgetPerDay = $newBudget/returnDays($orderID);
        // dd($newBudget);
        return ['newBudget' =>$newBudget,'maxBudgetPerDay'=> $maxBudgetPerDay];
    }

    function returnMinBudget($orderID){
        $order = order::find($orderID);
        $newBudget = ($order['budget'] * 0.4);
        // dd($newBudget);
        return $newBudget;
    }

    // send notifiction to  tourGuide 
    function requestTourGuide($userID){
      $orderDetails =OrderDetail::all();
        foreach($orderDetails as $orderDetail){
        
            if($orderDetail->user_id ==  $userID && $orderDetail->tourGuide_status == 'pending' ){
               $bookTourGuide =BookTourGuide::all();
               foreach($bookTourGuide as $book){
                if($book->order_id == $orderDetail->order_id){

                    return "notify the tourGuide that there is a user want him ";
                }
               }
            }
        }
    }
    
    // searching function for a tourGuide 
    // will put before it an if condition 
    // if the user put right in the check box of wanting  
    // a tourGuide
    function searchForTourGuide($orderID){
        //  the rest budget(40%) will split into two parts
        $order = order::find($orderID);
        $minBudget = ($order['budget'] * 0.4);
        $days =  returnDays($orderID);
        $minBudgetPerDay=$minBudget/$days;
    $tourGuides=Tourguide::all();
    $tourGuidesArray=[];
    foreach($tourGuides as $tourGuide){
        if((int)$tourGuide->price < $minBudgetPerDay){
        
        //     array_push($tourGuidesArray,$tourGuide->id);
        //     foreach
        //    $tourG=Tourguide::find()


            return $tourGuide;
        }else{
            return "you should raise your budget";
        }
    }

    }
    
    function searchForRoom($orderID){
        $returnMaxBudgetArray = returnMaxBudget($orderID);

    }
 
 
 
    class OrderController extends Controller
{

    public function index()
    {
        $budget = 1000; // Example budget
        $checkin = '2023-03-01'; // Example checkin date
        $checkout = '2023-03-05'; // Example checkout date
        $maxPrice = $budget * 0.6; // Maximum price based on 60% of the budget
        
        $availableRooms = DB::table('rooms')
            ->select('rooms.id', 'rooms.type', 'rooms.price')
            ->leftJoin('orders')->
            ->where(function ($query) use ($checkin, $checkout) {
                $query->where('booked_rooms.check_in', '>', $checkout)
                    ->orWhere('booked_rooms.check_out', '<', $checkin)
                    ->orWhereNull('booked_rooms.check_in')
                    ->orWhereNull('booked_rooms.check_out');
            })
            ->where('rooms.price', '<=', $maxPrice)
            ->orderBy('rooms.price')
            ->get();

     dd($availableRooms);


    }

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
        // return $order ;
        $checkin=$order->checkin;
        // dd($checkin);
        $checkout=$order->checkout;

        
     $availableRooms = Room::where('price', '<=', $order->budget * 0.6)
     ->whereDoesntHave('order', function ($query) use ($checkin, $checkout) {
           $query->where(function ($query) use ($checkin, $checkout) {
                   $query->where('checkin', '<', $checkout)
                         ->where('checkout', '>', $checkin);
           });
     })
     ->get();

     dd($availableRooms);
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

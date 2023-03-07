<?php

namespace App\Http\Controllers\orderController;
use App\Http\Controllers\Controller;
use App\Models\BookedRoom;
use App\Models\Room;
use App\Models\BookTourGuide;
use App\Models\Hotel;
use App\Models\OrderDetail;
use Carbon\Carbon;
use DateTime;
use App\Models\Order;
use App\Models\OrderedPlaces;
use App\Models\OrderedRoom;
use App\Models\Place;
use App\Models\Tourguide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\JoinClause;


class OrderController extends Controller
{
    public function index()
    {
        $orders=Order::all();
        $order=Order::find(1);
        $totalPrice= DB::table("rooms")
        ->select(DB::raw('sum(rooms.price)as sum'))
        ->join('booked_rooms', function (JoinClause $join) {
            $order=Order::find(1);
            $join->on('rooms.id', '=', 'booked_rooms.room_id')
            ->where('booked_rooms.order_id', '=', $order->id);
        })

        ->get();
        $check_out_datetime = new DateTime('2023-10-03');
        $check_in_datetime = new DateTime('2023-10-10');
        $interval = $check_in_datetime->diff($check_out_datetime);
        $nOfDays = $interval->format('%a'); //and then print do whatever you like with $nOfDays

        $totalPriceOfBookedRooms= $totalPrice[0]->sum*$nOfDays ;
        $restOfMaxBudget =  (10000 * 0.6)-$totalPriceOfBookedRooms;

        $booked = BookedRoom::where('order_id', $order->id)->limit(1)->get();
        $availablePlaces =DB::table("places")
        ->where("price", "<=", 2000)
        ->get();

        return response()->json([
            // 'all orders'=>$orders,
            'order id'=>$order->id,
            'totalPrice'=>$totalPrice[0]->sum,
            'totalPriceOfBookedRooms'=>$totalPriceOfBookedRooms,
            'restOfMaxBudget'=>$restOfMaxBudget,
            'book'=>$booked[0]->id,
            'availablePlaces'=>$availablePlaces


         ]);


    }

    public function store(Request $request)
    {


$check_in_datetime = new DateTime($request['check_in']);
// dd($first_datetime);
$check_out_datetime = new DateTime($request['check_out']);
$interval = $check_in_datetime->diff($check_out_datetime);
$n_of_days = $interval->format('%a');//and then print do whatever you like with $final_days
// dd($n_of_days);
        $request->validate([
            'budget'=>['required','digits_between:3,6'],
        ]);
        $order = Order::create([
            'user_id'=>$request['user_id'],
            'budget' =>  $request['budget'],
            'check_in' =>$request['check_in'],
            'check_out' =>$request['check_out'],
            'n_of_adults'=>(int)$request['n_of_adults'],
            'n_of_childeren'=>isset($request['n_of_childeren'])?(int)$request['n_of_childeren']:0,
            'n_of_days'=>(int)$n_of_days
        ]);

        for($i=0; $i < count($request['n_of_room']) ; $i++) {
            // dd($nOfroomArray);
           // echo "here";
            OrderedRoom::create([
                 'order_id' => $order->id,
                 'n_of_room'=> (int)$request['n_of_room'][$i],
                 'room_type' => $request['room_type'][$i]
             ]);
        }
       $orderedRoom =OrderedRoom::where('order_id',$order->id)->get();
        return response()->json([
           'order info'=>$order,
           'ordered room '=>$orderedRoom,
           'message'=>'the order is saved'

        ]);

    }

   public function destroy(order $orderID)
    {
       $deleteOrder= $orderID->delete();
        if($deleteOrder){
            $rooms=OrderedRoom::where('order_id',$orderID->id)->get();
            if(!is_null($rooms)){

                $query='delete from ordered_room where order_id ='.$orderID->id;
                DB::delete($query);
            }
           $roomsBooked= BookedRoom::where ('order_id',$orderID->id)->get();
           if(!is_null($roomsBooked)){
            $query='delete from booked_rooms where order_id ='.$orderID->id;
            DB::delete($query);
           }
           $tourguideBooked= BookTourGuide::where('order_id',$orderID->id)->first();
           if(!is_null($roomsBooked)){

               $query='delete from book_tour_guide where order_id ='.$orderID->id;
               DB::delete($query);
           }
                    $placesBooked= OrderedPlaces::where ('order_id',$orderID->id)->get();
                  if(!is_null($placesBooked)){
                    $query='delete from ordered_places where order_id ='.$orderID->id;
                    DB::delete($query);
                  }

        }

        return response()->json([
           'message'=> 'order deleted'
        ]);

    }

    public function show(Order $orderID){
        // dd($orderID->User);   
        // dd($orderID->Room);   
        // foreach($orderID->Room as $room_id){
        //     dd($room_id->id);
        // }
        // dd($orderID->Tourguide->Tourguide->User);   
        // dd($orderID->Places); 
        $allrooms= Room::all();
        $allHotels=Hotel::all();
        $allPlaces=Place::all(); 
        
        return response()->json([
            'message'=> 'order deleted',
            'userInfo'=>$orderID->User,
            'orderedRooms'=>count($orderID->Room),
            'allrooms'=>$allrooms,
            'allHotels'=>$allHotels,
            'allPlaces'=>$allPlaces,
            'tourguide'=> $orderID->Tourguide->Tourguide->User,
            
         ]);
    }


















// function returnDays($orderID){
//     $order = order::find($orderID);

// ///////  Carbon   //////////////
//         // dd(intval($checkOut));
//         // $current = Carbon::now();
//         //  $start_time = Carbon::parse($checkOut);
//         //  $fin_time = Carbon::parse($checkIn);
//         //  $result = $start_time->diffInDays($fin_time, false);
//         $check_in =$order['check_in'];
// $check_out = $order['check_out'];
// $check_in_datetime = new DateTime($check_in);
// // dd($first_datetime);
// $check_out_datetime = new DateTime($check_out);
// $interval = $check_in_datetime->diff($check_out_datetime);
// $final_days = $interval->format('%a');//and then print do whatever you like with $final_days
// dd($final_days);
// }
//     function returnMaxBudget($orderID){
//         $order = order::find($orderID);
//         $newBudget = ($order['budget'] * 0.6);
//         $maxBudgetPerDay = $newBudget/returnDays($orderID);
//         // dd($newBudget);
//         return ['newBudget' =>$newBudget,'maxBudgetPerDay'=> $maxBudgetPerDay];
//     }

//     function returnMinBudget($orderID){
//         $order = order::find($orderID);
//         $newBudget = ($order['budget'] * 0.4);
//         // dd($newBudget);
//         return $newBudget;
//     }

//     // send notifiction to  tourGuide
//     function requestTourGuide($userID){
//       $orderDetails =OrderDetail::all();
//         foreach($orderDetails as $orderDetail){

//             if($orderDetail->user_id ==  $userID && $orderDetail->tourGuide_status == 'pending' ){
//                $bookTourGuide =BookTourGuide::all();
//                foreach($bookTourGuide as $book){
//                 if($book->order_id == $orderDetail->order_id){

//                     return "notify the tourGuide that there is a user want him ";
//                 }
//                }
//             }
//         }
//     }

//     // searching function for a tourGuide
//     // will put before it an if condition
//     // if the user put right in the check box of wanting
//     // a tourGuide
//     function searchForTourGuide($orderID){
//         //  the rest budget(40%) will split into two parts
//         $order = order::find($orderID);
//         $minBudget = ($order['budget'] * 0.4);
//         $days =  returnDays($orderID);
//         $minBudgetPerDay=$minBudget/$days;
//     $tourGuides=Tourguide::all();
//     $tourGuidesArray=[];
//     foreach($tourGuides as $tourGuide){
//         if((int)$tourGuide->price < $minBudgetPerDay){

//         //     array_push($tourGuidesArray,$tourGuide->id);
//         //     foreach
//         //    $tourG=Tourguide::find()


//             return $tourGuide;
//         }else{
//             return "you should raise your budget";
//         }
//     }

//     }

//     function searchForRoom($orderID){
//         $returnMaxBudgetArray = returnMaxBudget($orderID);

//     }










// public function customization($takeTheBudget,$returnDay)
// {
//     if ($takeTheBudget) {

//     }
// }



// public function index()
// {


//     $budget = 1000; // Example budget
//     $checkin = '2023-03-01'; // Example checkin date
//     $checkout = '2023-03-05'; // Example checkout date
//     $maxPrice = $budget * 0.6; // Maximum price based on 60% of the budget
//     $budgetPerDay=$maxPrice/5;
//     $availableRooms = DB::table("rooms")
//     ->select("id")
//     ->where("type", "=", 'single')
//     ->where("check_in", "=", 0)
//     ->where("check_out", "=", 0)
//     ->where("price","<=",$budgetPerDay)
//     ->limit(1)->get() ;

//  dd($availableRooms);


// }

// public function store(Request $request)
// {


//     // $check_in =$order->check_in;
//     // $check_out = $order->check_out;


//     $budget=($order->budget*0.6);

//     $check_out_datetime = new DateTime($order->check_out);
//     $check_in_datetime = new DateTime($order->check_in);
//     $interval = $check_in_datetime->diff($check_out_datetime);
//     $final_days = $interval->format('%a');//and then print do whatever you like with $final_days

//     $minBudgetForTourGuide=  $request['budget'] *0.2/$final_days;
//     // dd($first_datetime);
//     // dd($final_days);
//     $budgetPerDay=$budget/$final_days;
//     // dd ( $budgetPerDay);

//    for($i=0 ; $i< $request['n_of_rooms'];$i++ ){

//        BookedRoom::create([
//           'order_id'=> $order->id,
//           'room_type' => $request['room_type'] ,
//           'room_id' => DB::table("rooms")
//           ->select("id")
//           ->where("type", "=", $request['room_type'])
//           ->where("check_in", "=", 0)
//           ->where("check_out", "=", 0)
//           ->where("price","<=",$budgetPerDay)
//           ->limit(1)->get()

//        ]);
//    }
// //    Places
// //    Place::all();

//    for($i=0; $i>$final_days;$i++){

//        OrderedPlaces::create([
//          'place_id'=> DB::table("places")
//          ->select("id")
//          ->where("price","<=",$budgetPerDay)
//          ->limit(1)->get() ,
//          'order_id'=> $order->id
//        ]);
//    }

//    for($i=0; $i>$final_days;$i++){

//        BookTourGuide::create([
//          'tourGuide_id'=> DB::table("tourguides")
//          ->select("id")
//          ->where("price_per_day","<=",$budgetPerDay)
//          ->limit(1)->get() ,
//          'order_id'=> $order->id
//        ]);
//    }
}

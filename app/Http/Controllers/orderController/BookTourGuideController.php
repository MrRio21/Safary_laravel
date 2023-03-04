<?php


namespace App\Http\Controllers\orderController;
use App\Http\Controllers\Controller;
use App\Models\BookTourGuide;
use App\Models\Order;
use Illuminate\Http\Request;
use DateTime;
use App\Models\BookedRoom;
use App\Models\OrderedPlaces;
use App\Models\Tourguide;
use App\Models\TourguideLanguage;
use Illuminate\Support\Facades\DB;

class BookTourGuideController extends Controller
{

    public function index(Request $request)
    {
        $order = Order::find($request['order_id']);

        $check_out_datetime = new DateTime($order->check_out);
        $check_in_datetime = new DateTime($order->check_in);
        $interval = $check_in_datetime->diff($check_out_datetime);
        $nOfDays = $interval->format('%a'); //and then print do whatever you like with $nOfDays
        //   
        $booked = BookedRoom::where('order_id',$request['order_id'])->limit(1)->get();
        $bookedPlaces = OrderedPlaces::where('order_id',$request['order_id'])->get();
        if(is_null($booked[0]->id)){
            $budget= $order->budget ;
           
        }else{
            // the rest that came after booking the places 
            $budget = $request['restOfMaxBudget']+($order->budget *0.2);
        }
           $availableTourguides =DB::table("tourguides")
        ->where("price_per_day", "<=", $budget)
        ->get();
        $tourguideLang=TourguideLanguage::all();
        if(is_null($availableTourguides)){
            return response()->json([
                'message'=>'there is no tourguides available'
            ]);
        }else{
            return response()->json([
                'availableTourguides'=>$availableTourguides,
                'tourguideLang' =>$tourguideLang
            ]);
        }
              
    }

    public function store(Request $request)
    {
        $order = Order::find($request['order_id']);
        BookTourGuide::create([
            'tourguide_id'=>$request['tourguide_id'],
            'order_id'=>$request['order_id']
        ]);
        
    }
    public function update(Request $request, BookTourGuide $BookTourGuide)
    {
        $BookTourGuide->update($request->all());
        return response()->json([
              'BookTourGuide updated successfully'=>$BookTourGuide  
          ]);  
     }

     public function destroy(Request $request)
     {
        BookTourGuide::where ('tourguide_id',$request['tourguide_id'])->delete();
 
     }
}


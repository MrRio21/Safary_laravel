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

    public function index(Order $orderID,Request $request)
    {
        $booked = BookedRoom::where('order_id',$orderID->id)->first();
        $places = OrderedPlaces::where('order_id',$orderID->id)->get();

    $budget = (int)$request['restOfBudget'] / $orderID->n_of_days;

// dd($budget);
           $availableTourguides =Tourguide::where("price_per_day", "<=", $budget)->get();
        //    dd($availableTourguides);
        $tourguideLang=TourguideLanguage::all();
        if(is_null($availableTourguides)){
            return response()->json([
                'message'=>'there is no tourguides available or you should raise your budget'
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


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
           $availableTourguides =DB::table('tourguides')->where("price_per_day", "<=", $budget)->get();
        //    dd($availableTourguides);
        $tourguideLang=TourguideLanguage::all();
        // if(count($availableTourguides) == 0 ){
           
        //     return response()->json([
        //         'message'=>'there is no tourguides available or you should raise your budget'
        //     ]);
        // }else{
        //     return response()->json([
        //         'availableTourguides'=>$availableTourguides,
        //         'tourguideLang' =>$tourguideLang,
        //         'restOfBudget'=>(int)$request['restOfBudget']
        //     ]);
        // }
        return view("dashboardTourguide.tourguideProfile",[ "places" => $places]);
              
    }

    public function store(Order $orderID,Request $request)
    {
        // dd($orderID->id);

        // dd($placeID);
        // echo"here";
       $tourguideBooked=  BookTourGuide ::create([
                    'order_id' =>  $orderID->id,
                    'tourguide_id' =>$request['tourguide_id'],
                    'tourguide_status' => $request['book_tourguide']
        ]);
        $tourguideInfo=Tourguide::where('id',$request['tourguide_id'])->first();
        // dd($tourguideInfo->price_per_day);
        $tourguideBudget= $tourguideInfo->price_per_day * $orderID->n_of_days;
            //  dd($tourguideBudget);
           
        // return response()->json([
        //     // 'tourguideBooked'=>$tourguideBooked,
        //     'tourguideInfo'=>$tourguideInfo,
        //     'tourguideBudget'=>$tourguideBudget

            
        //  ]);
        redirect(route("dashboardTourguide.tourguideProfile"));
    
        
    }
    public function update(Request $request,Order $orderID)
    {
        DB::table('book_tour_guide')
                ->where('order_id',$orderID->id)
                ->delete();
                $this->store($orderID,$request);

                $BookTourGuide= DB::table('book_tour_guide')
                ->where('order_id',$orderID->id)->get();
        return response()->json([
            'BookTourGuide'=>$BookTourGuide,  
            'message'=>'updated successfully',
          ]);  
     }

     public function destroy(Order $orderID)
     {
        DB::table('book_tour_guide')
        ->where('order_id',$orderID->id)
        ->delete();
        return response()->json([
            'mesaage '=>'Booking deleted successfully'
        ]);
 
     }
}


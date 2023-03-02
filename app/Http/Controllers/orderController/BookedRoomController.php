<?php


namespace App\Http\Controllers\orderController;
use App\Http\Controllers\Controller;
use App\Models\BookedRoom;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BookedRoomController extends Controller
{
    public function store(Request $request){

        for($i=0 ; $i< $request['n_of_rooms'];$i++ ){

            BookedRoom::create([
               'order_id'=> $request['order_id'],
               'room_type' => $request['room_type'] ,
               'room_id' => DB::table("rooms")
               ->select("id")
               ->where("type", "=", $request['room_type'])
               ->where("check_in", "=", 0)
               ->where("check_out", "=", 0)
               ->where("price","<=",$budgetPerDay)
               ->limit(1)->get() 
    
            ]);
        }
    }
}

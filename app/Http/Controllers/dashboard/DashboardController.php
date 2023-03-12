<?php

namespace App\Http\Controllers\dashboard;
use RealRashid\SweetAlert\Facades\Alert;
// use Alert;
use App\Http\Controllers\Controller;
use App\Http\Controllers\tripController\ChosenTripController;
use App\Models\Hotel;
use App\Models\HotelImg;
use App\Models\HotelOwner;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ChosenTrip;
use App\Models\RoomImg;
use Illuminate\Console\View\Components\Alert as ComponentsAlert;

class DashboardController extends Controller
{
    // hotel owner ............................................................
    // public function allOwnedHotels(Request $request){
    //     $hotelsInfo =Hotel::where('hotel_owner_id',$request['hotel_owner_id']);
    //     foreach($hotelsInfo as $hotelInfo){
    //         $hotelImg=HotelImg::where('hotel_id',$hotelInfo->id);
    //         return response()->json([
    //             'hotel Info'=>$hotelInfo,
    //             'hotel Imgs' => $hotelImg
    //         ]);
    //     }
    // }
    public function addHotelView(){
        return view('dashboardHotelOwner.index');
    }
    public function addHotel(Request $request){
        // dd($request);
      $hotel=  Hotel::create([
            'hotel_owner_id'=>Auth::user()->HotelOwner->id,
            'name'=>$request->name,
            'address'=>$request->address,
            'cover_img'=>$request->file("cover_img")->storeAs("public/imgs",md5(microtime()).$request['cover_img']->getClientOriginalName()),
            'type'=>$request->type,
      ]);
      if(!is_null($request->image[0])){
      foreach($request->image as $img){

        HotelImg::create([
            'image'=>$img->storeAs("public/imgs",md5(microtime()).$img->getClientOriginalName()),
            'hotel_id'=>$hotel->id
        ]);
    }
    }
    Alert::success('Congrats', 'You\'ve Successfully added the hotel ^^');

      return redirect(route('MyOwnedHotels'));
    }
    public function dashboard(){
        return view('dashboardHotelOwner.profile');

    }
    public function previewHotel(Hotel $hotelID){
        // dd($hotelID);

        // dd($hotel);
        return view('dashboardHotelOwner.previewHotel',[
            'hotel'=>$hotelID
        ]);

    }
    public function deleteHotel(Hotel $hotelID){
// dd($hotelID);
        $deleteHotel= $hotelID->delete();

        if($deleteHotel){
            HotelImg::where ('hotel_id',$hotelID)->delete();
        }
        Alert::alert('deleted', 'You\'ve deleted the hotel successfully ^^');

        return back();

    }
    public function editHotel(hotel $hotelID){
        // dd($hotelID);
        // dd ( $hotelID->HotelImg);
        $hotelImgs=$hotelID->HotelImg;
        return view('dashboardHotelOwner.editHotel',[
            'hotel'=>$hotelID,
            'images'=>$hotelImgs
        ]);
    }

    public function updateHotel(Request $request, hotel $hotelID){
        //  dd($request['cover_img']);
        if(!is_null($request->cover_img)){

            $hotelID->update([
                'name'=>$request->name,
                'address'=>$request->address,
                'type'=>$request->type,
                'cover_img'=>$request->file("cover_img")->storeAs("public/imgs",md5(microtime()).$request['cover_img']->getClientOriginalName())
            ]);
        }else{
            $hotelID->update([
                'name'=>$request->name,
                'address'=>$request->address,
                'type'=>$request->type
            ]);
        }
        // dd($request->image);
        foreach($request->image as $img){
            // dd($img);

        }
        if(!is_null($request->image[0])){
               foreach($request->image as $img){
            //  dd(HotelImg::where('hotel_id',$hotelID->id)->update(['image']));
                   HotelImg::where('hotel_id',$hotelID->id)->update([
                       'image'=>$img->storeAs("public/imgs",md5(microtime()).$img->getClientOriginalName())
                    ]);
               }
        }
        Alert::success('Congrats', 'You\'ve Successfully updated the hotel ^^');

        return redirect(route('MyOwnedHotels'));
    }

    public function AllRooms(Hotel $hotelID){
        // dd($hotel->Room());
        $rooms=$hotelID->Rooms()->get();
        // dd($hotelID->id);
        // $rooms= Room::where('hotel_id',$hotelID)->get();
// dd($rooms);
if(count($rooms)==0){
    Alert::warning('empty', 'there is no rooms added yet');
    return back();
}else{
    return view('dashboardHotelOwner.rooms',['rooms'=>$rooms]);

}
    }

    public function previewRoom(Room $roomID){

            return view('dashboardHotelOwner.previewRoom',[
            'room'=>$roomID
        ]);
    }

    public function addRoomFormForHotel(Hotel $hotelID){

        return view('dashboardHotelOwner.add_room_for_hotel',['hotel'=>$hotelID]);

    }
    public function addRoomForm(){

        return view('dashboardHotelOwner.add_room');

    }
    public function storeRoom(Request $request){

//   dd($request);
  $room= Room::create([
   'n_of_available_rooms'=>$request->n_of_available_rooms,
   'price'=>$request->price,
   'type'=>$request->type,
   'cover_img'=>$request->file("cover_img")->storeAs("public/imgs",md5(microtime()).$request['cover_img']->getClientOriginalName()),
   'hotel_id'=>$request->hotel_id
  ]);
  if(!is_null($request->image[0])){
    foreach($request->image as $img){

      RoomImg::create([
          'image'=>$img->storeAs("public/imgs",md5(microtime()).$img->getClientOriginalName()),
          'room_id'=>$room->id
      ]);
  }
  }
  Alert::success('Congrats', 'You\'ve Successfully added the Room ^^');
  return back();

    }

public function allRequests(){
    return view('dashboardHotelOwner.allRequests');
}


    public function chosenTrip()
    {
        $chosenTrips=  ChosenTrip::all();
        return view('dashboardAdmin.admin', ['chosentrips' => $chosenTrips]);
    }





























    public function allOwnedHotels(){
        // if(Auth::user()->)
        $allHotels =Hotel::all();

        $hotelsImg=  HotelImg::all();
            return view('dashboardHotelOwner.hotels',[
                'allHotels'=>$allHotels,
                'AllImgs'=>$hotelsImg
            ]);
        }


    // public function hotelOwnerInfo(Request $request){
    //     $hotelOwner =HotelOwner::find($request['hotel_owner_id']);
    //         return response()->json([
    //             'hotelOwner Info'=>$hotelOwner,

    //         ]);

    // }
    // public function allUsers(Request $request){
    //     $hotelOwner =HotelOwner::find($request['hotel_owner_id']);
    //         return response()->json([
    //             'hotelOwner Info'=>$hotelOwner,

    //         ]);

    // }
    }







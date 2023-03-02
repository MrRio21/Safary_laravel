<?php

namespace App\Http\Controllers\hotelsController;
use App\Http\Controllers\Controller;
// namespace App\Http\Controllers;
use App\Models\HotelImg;
use App\Models\Hotel;
use App\Models\HotelOwner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allHotels =Hotel::all();
        $hotelImgs= HotelImg::all();

        return response()->json([
            'allHotels'=>$allHotels ,'hotelImgs'=>$hotelImgs
        ]); 
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $userID= Auth->user()
        // $hotelOwnID=HotelOwner::where('user_id',$userID)->id;
        $request->validate([
            'name'=>'required',
            // 'address '=>['required','min:10'],
            'type'=>'required',
        ]);
        $hotelName = $request['name'];
        $address =$request['address'];
        $type = $request['type'];
        $cover_img = $request['cover_img'];
        $hotel = hotel::create([
            'name' => $hotelName,
            'address' =>$address,
            'type' =>$type,
            'cover_img' =>$cover_img,

            // 'hotel_owner_id'=> $hotelOwnID
            'hotel_owner_id'=> $request['hotel_owner_id']

        ]);
      
        // // the hashing to ignore the conflicts in names 
        // foreach as we have multiple images 
        foreach($request['img'] as $image){

            $img = md5(microtime()).$image->getClientOriginalName();
            // $request["img"]->storeAs("public/imgs",$img);
            $hotelId = $hotel->id;
            $hotelImg = HotelImg::create([
                'image' => $img,
                'hotel_id' =>$hotelId,
               
            ]);
        }
        // return 'the hotel info stored successfully';

        return response()->json([
            'hotel info '=> $hotel,
            'hotel info is saved successfully '=>'message' 
        ]);  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\hotel
     * @return \Illuminate\Http\Response
     */
    public function show(Hotel $hotelId)
    {
        $hotelInfo = Hotel::find($hotelId);
        HotelImg::where('hotel_id',$hotelId);
        return  response()->json([
            'hotel info'=>$hotelInfo 
        ]);   
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request
     * @param  \App\Models\hotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, hotel $hotelId)
    {
        if($request['name']){

          $results=Hotel::where ('id',$hotelId)->update([
                'name'=> $request['name'],
            ]);
        }
        if($request['description']){

            $results=Hotel::where ('id',$hotelId)->update([
                'name'=> $request['description'],
            ]);
        }
        if($request['name']&&$request['address']){
            $results=Hotel::where ('id',$hotelId)->update([
                'name'=> $request['name'],
                'address' => $request['address']
            ]);
        }
        return response()->json([
            'hotel updated'=>$results 
        ]);   


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(hotel $hotelId)
    {
        Hotel::find($hotelId)->delete();

        return response()->json([
            'hotel deleted'
        ]); 
        
    }
}

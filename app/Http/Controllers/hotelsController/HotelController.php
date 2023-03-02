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
        // dd($allHotels);6

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
        // dd($request['image']);
        // 
// dd($request);
// $images = explode(',', $request['image']);
// // dd($images);
//         foreach($request['image'] as $image){
// //  dd($image);
//             // $image ->storeAs("public/imgs",md5(microtime()).$image->getClientOriginalName());
//             // $request["img"]->storeAs("public/imgs",$img);
//             // $hotelId = $hotel->id;
//             // dd($image);
//             $hotelImg = HotelImg::create([
//                 'image' => md5(microtime()).$image->getClientOriginalName(),
//                 'hotel_id' =>1,
               
//             ]);
//         }
    
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
    

    // ---------------------- by post Method --------------------------
    // public function show(Request $hotelId)
    // {
    //     // dd($hotelId->id);
    //     $hotelInfo = Hotel::where('id',$hotelId->id)->get();
    //    $hotelImgs= HotelImg::where('hotel_id',$hotelId);
    //     return  response()->json([
    //         'hotel info'=>$hotelInfo ,
    //         'hotel Imgs' => $hotelImgs
    //     ]);   
    // }

    // ----------------------the original way -----------------------
    public function show(Hotel $hotelID)
    {
        // dd($id);
        $hotelInfo = Hotel::find($hotelID);
     
       $hotelImgs= HotelImg::where('hotel_id',$hotelID);
        return  response()->json([
            'hotel info'=>$hotelInfo ,
            'hotel Imgs' => $hotelImgs
        ]);   
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request
     * @param  \App\Models\hotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, hotel $hotelID)
    {
      

        // dd($request['name']);
    //   $hotel = Hotel::where('id', $hotelID)
    //   ->update($request->all());
    //   $new =  Hotel::find($hotelID);
    //   return $hotel;


// dd($request['name']);
        if(!empty($request['name'])){
            //   $hotel=Hotel::find($hotelID);
            //   $hotel->name=$request['name'];
            // $new= Hotel::where ('id',$hotelID)
            //   ->update([
            //     'name'=> $request['name'],
            //   ]);
            //   dd(Hotel::where ('id',$hotelID));
            $new= Hotel::where ('id',$hotelID)->get();
            dd($new->name);

            }
            

        //     $hotelNew=Hotel::find($hotelID);
        //     return [
        //         "message"=> "update done",
        //         "hotel" =>$hotelNew,
        //         'new'=>$new

        //     ];
        // }
        // if($request['description']){

        //     $results=Hotel::where ('id',$hotelID)->update([
        //         'name'=> $request['description'],
        //     ]);
        // }
        // if($request['cover_img']){

        //     $results=Hotel::where ('id',$hotelID)->update([
        //         'cover_img'=> $request['cover_img'],
        //     ]);
        // }
        // if($request['name']&&$request['address'] && $request['cover_img']){
        //     $results=Hotel::where ('id',$hotelID)->update([
        //         'name'=> $request['name'],
        //         'address' => $request['address'],
        //         'cover_img'=> $request['cover_img'],
        //     ]);
        // }
        // // for imgs of the hotel 
        // if($request['images']){
        //     foreach( $request['images'] as $image )
        //     $img = md5(microtime()).$image->getClientOriginalName();

        //     $results=HotelImg::where ('hotel_id',$hotelID)->update([
        //           'image'=> $img, 
        //       ]);
        // }
        // return response()->json([
        //     'hotel updated'=>$new  
        // ]);   


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(hotel $hotelID)
    {
       $deleteHotel= Hotel::find($hotelID)->delete();
        if($deleteHotel){
            HotelImg::where ('hotel_id',$hotelID)->delete();
        }

        return response()->json([
            'hotel deleted'
        ]); 
        
    }
}

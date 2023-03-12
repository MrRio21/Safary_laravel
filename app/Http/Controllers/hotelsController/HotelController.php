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
        // dd($allHotels);

        // return response()->json([
        //     'allHotels'=>$allHotels ,'hotelImgs'=>$hotelImgs
        // ]);
        
        return view("dashboardAdmin.allHotels.HotelTable",["allHotels"=> $allHotels],["hotelImgs"=>$hotelImgs]);
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
            'name'=>['required','unique'],
            // 'address '=>['required','min:10'],
            'type'=>'required',
        ]);
        $hotelName = $request['name'];
        $address =$request['address'];
        $type = $request['type'];
        $cover_img = $request['cover_img']->storeAs("public/imgs",md5(microtime()).$request['cover_img']->getClientOriginalName());
        $hotel = hotel::create([
            'name' => $hotelName,
            'address' =>$address,
            'type' =>$type,
            'cover_img' =>$cover_img,

            // 'hotel_owner_id'=> $hotelOwnID
            'hotel_owner_id'=> $request['hotel_owner_id']

        ]);
// dd(is_file($request['image'])); //true
foreach( $request['image'] as $img){

    // dd($img);
       HotelImg::create([
            'image'=> $img->storeAs("public/imgs",md5(microtime()).$img->getClientOriginalName()),
            'hotel_id'=>$hotel->id
            // 
          ]);

}
        // // the hashing to ignore the conflicts in names
        // foreach as we have multiple images
        // dd($request['image']);
        //
// dd($request);
// $images = explode(',', $request['image']);
// // dd($images);
//         foreach($request['image'] as $image){
// //  dd($image);
            // $image ->storeAs("public/imgs",md5(microtime()).$image->getClientOriginalName());
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

            'message' =>'hotel info is saved successfully '
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
    public function show($hotelID)
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
    public function update(Request $request, hotel $hotelID , HotelImg $hotelid )
    {

        // dd($hotelid);
      $hotelID->update($request->all());
      return response()->json([
            'hotel updated successfully'=>$hotelID
        ]);
        // dd($request['name']);
    //   $hotel = Hotel::where('id', $hotelID)
    //   ->update($request->all());
    //   $new =  Hotel::find($hotelID);
    //   return $hotel;


// dd($request['name']);
        // if(!empty($request['name'])){
        //     //   $hotel=Hotel::find($hotelID);
        //     //   $hotel->name=$request['name'];
        //     // $new= Hotel::where ('id',$hotelID)
        //     //   ->update([
        //     //     'name'=> $request['name'],
        //     //   ]);
        //     //   dd(Hotel::where ('id',$hotelID));
        //     $new= Hotel::find($hotelID);
        //     // dd($new[0]->name);
        //     $new[0]->name = $request['name'];
        //     return response()->json([
        //         'hotel updated'=>$new
        //     ]);
        //     }


        // //     $hotelNew=Hotel::find($hotelID);
        // //     return [
        // //         "message"=> "update done",
        // //         "hotel" =>$hotelNew,
        // //         'new'=>$new

        // //     ];
        // // }
        // if($request['address']){

        // //     $results=Hotel::where ('id',$hotelID)->update([
        // //         'name'=> $request['description'],
        // //     ]);
        // $hotelID->update([
        //             'address'=> $request['address'],
        //         ]);
        // // $new= Hotel::find($hotelID);
        // // // dd($new[0]->name);
        // // $new[0]->description = $request['description'];
        // return response()->json([
        //     'hotel updated'=>$hotelID
        // ]);
        // }
        // if($request['cover_img']){

        // //     $results=Hotel::where ('id',$hotelID)->update([
        // //         'cover_img'=> $request['cover_img'],
        // //     ]);
        // // }
        // // if($request['name']&&$request['address'] && $request['cover_img']){
        // //     $results=Hotel::where ('id',$hotelID)->update([
        // //         'name'=> $request['name'],
        // //         'address' => $request['address'],
        // //         'cover_img'=> $request['cover_img'],
        // //     ]);
        // $new= Hotel::find($hotelID);
        // // dd($new[0]->name);
        // $new[0]->cover_img = $request['cover_img'];
        // return response()->json([
        //     'hotel updated'=>$new
        // ]);
        // }
        // // // for imgs of the hotel
        // if($request['images']){
        // //     foreach( $request['images'] as $image )
        // //     $img = md5(microtime()).$image->getClientOriginalName();

        // //     $results=HotelImg::where ('hotel_id',$hotelID)->update([
        // //           'image'=> $img,
        // //       ]);
        // $new= HotelImg::where('hotel_id',$hotelID)->select('image')->get();
        // dd($new);
        // $new[0]->cover_img = $request['cover_img'];

        // }



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy($ID)
    {
       $deleteHotel= Hotel::find($ID)->delete();
        if($deleteHotel){
            HotelImg::where ('hotel_id',$ID)->delete();
        }

        // return response()->json([
        //     'hotel deleted'
        // ]);
        return back();

    }
}

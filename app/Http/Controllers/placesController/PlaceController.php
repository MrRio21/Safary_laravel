<?php

namespace App\Http\Controllers\placesController;
use App\Http\Controllers\Controller;
use App\Models\HotelImg;
use App\Models\Place;
use Illuminate\Http\Request;
use App\Models\PlaceImg;




class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $places= Place::all();
        $placeImg=PlaceImg::all();
        // return response()->json([
        //     'allPlaces '=> $places,
           
        // ]);  

        
        return view("dashboardAdmin\allPlaces\placesTable",["places"=> $places],['placeImg'=>$placeImg]);
    }

    public function create()
    {
        return view("dashboardAdmin\allPlaces\placesForm");

    }


    public function edit(place $Place)
    {
        $places =Place::find($Place);
        // $PlaceImg=PlaceImg::find($PlaceImg['place_id']);

        return view('dashboardAdmin.allPlaces.Editplaces',['places'=>$places],['PlaceImg'=>$PlaceImg]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'description'=>['required','min:10'],
            // 'price'=>'numric'
        ]);
// dd($request['image']);
        $place = Place::create([
            'name' => $request['name'],
            'description' =>$request['description'],
            'price' =>$request['price'],
            'cover_img' =>$request['cover_img']->storeAs("public/imgs",md5(microtime()).$request['cover_img']->getClientOriginalName()),
            'type'=>$request['type']
        ]);
        
        foreach( $request['image'] as $img){

            // dd($img);
               PlaceImg::create([
                    'image'=> $img->storeAs("public/imgs",md5(microtime()).$img->getClientOriginalName()),
                    'place_id'=>$place->id
                    // 
                  ]);
        
        }
        $placeImgs= PlaceImg::where('place_id',$place->id)->get();
        // return response()->json([
        //     'place info '=> $place,
        //     'place img'=>$placeImgs,
        //     'message'=>'place info is saved successfully ' 
        // ]);  

     return   redirect(route('dashboardAdmin.allPlaces.placesTable'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\place  $place
     * @return \Illuminate\Http\Response
     */
    public function show(Place $place)
    {
        // $place = Place::find($placeID);
        // dd($placeID);
        return  view('MUT.placeDetails',[
            'place'=> $place,
        ]);  
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\place  $place
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Place $placeID)
    {
  
          Place::where ('id',$placeID)->update([
            'name' => $request['name'],
            'description' =>$request['description'],
            'price' =>$request['price'],
            'cover_img' =>$request['cover_img']->storeAs("public/imgs",md5(microtime()).$request['cover_img']->getClientOriginalName()),
            'type'=>$request['type']
    
          ]);
          
          foreach( $request['image'] as $img){

            // dd($img);
            PlaceImg::where('place_id',$place->id)->update([ 
                    'image'=> $img->storeAs("public/imgs",md5(microtime()).$img->getClientOriginalName()),
                    'place_id'=>$place->id
                    // 
                  ]);
        
        }
        
        // $place=Place::find($place);
        // $placeID->update($request->all());
        // dd($placeID->id);

        // return response()->json([
        //       'place updated successfully'=>$placeID
        //   ]);
        

         
          }
  
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\place  $place
     * @return \Illuminate\Http\Response
     */
    public function destroy($ID)
    {
        // $placeID->delete();
        // Place::find($ID)->delete();


        $DelplaceID= Place::find($ID)->delete();
        if($DelplaceID){
            HotelImg::where ('place_id',$ID)->delete();
        }

       
        // return response()->json([
        //     'message' =>'place deleted'
        // ]);
        return back();
    }
}

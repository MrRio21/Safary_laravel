<?php

namespace App\Http\Controllers\Auth\registerationController;
use App\Http\Requests\StoreUserRequest;
use App\Http\Controllers\Controller;
use App\Models\TourGuide;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTourgideRequest;
use App\Models\Role;
use App\Models\TourguideLanguage;
use App\Models\User;

class TourguideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::all(); //fk
        $tourGides=tourguide::all();

        return view("dashboardAdmin.user.users",[ "tourGides" => $tourGides],["users"=> $users]);
        //show table from DB

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("MUT.tourguideSignUp");
    }

    public function createTourguide()
    {
        return view("dashboardAdmin.Tourguide.Tourguideform");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTourgideRequest $request,StoreUserRequest $requestUser)
    {
// dd($request);

       $user=  User::create([
        'name' => $requestUser['name'] ,
        'email' => $requestUser['email'],
        'password' => $requestUser['password'],
        'gender' => $requestUser['gender'] ,
        'phone' => $requestUser['phone'],
        'image'=>isset($requestUser['image'])?$requestUser['image']-> storeAs("public/imgs",md5(microtime()).$requestUser['image']->getClientOriginalName()):null,
        ]);

       $tourguide= TourGuide::create([
        'price_per_day' =>(int)$request['price_per_day'] ,
        'syndicate_No' => $request['syndicate_No'] ,
        'desc' => $request['desc']  ,
          // 'bio' =>isset($request['bio'])?$request['bio']:null  ,
        'user_id' => $user['id']
       ]);
// print_r($request['language']);
       if(is_array($request['language'])){
        foreach($request['language'] as $lang){

          TourguideLanguage::create([
               'language' => $lang ,
               'tourguide_id' => $tourguide['id']
              ]);
        }
       }else{
       TourguideLanguage::create([
            'language' => $request['language'] ,
            'tourguide_id' => $tourguide['id']
           ]);
       }
       $newUser = User::find($user->id);

       if(!empty ($tourguide)){
           $role_id =Role::where('name','tourguide')->limit(1)->get();
           $newUser->update(['role_id'=>$role_id[0]->id]);
       }

       return redirect(route('tourguide.create'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tourgide  $tourgide
     * @return \Illuminate\Http\Response
     */
    public function show(TourGuide $tourgide)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tourgide  $tourgide
     * @return \Illuminate\Http\Response
     */
    public function edit(TourGuide $tourgide)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tourgide  $tourgide
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TourGuide $tourgide)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tourgide  $tourgide
     * @return \Illuminate\Http\Response
     */
    public function destroy($tourgideId)
    {
        User::find($tourgideId)->delete();

        return back();
    }
}

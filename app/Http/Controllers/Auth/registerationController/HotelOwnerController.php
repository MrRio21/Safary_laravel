<?php

namespace App\Http\Controllers\Auth\registerationController;
use App\Http\Controllers\Auth\registerationControlle\userController;
use App\Http\Requests\StoreUserRequest;
use App\Http\Controllers\Controller;
use App\Models\hotelOwner;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreHotelOwnerRequest;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
class HotelOwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::all(); //fk
        $hotelOwner=hotelOwner::all();

        return view("dashboardAdmin.user.users",["users"=> $users],["hotelOwner"=> $hotelOwner]);
        //show table from DB
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("MUT.hotelOwnerSignUp");
    }


    public function createHotelOwnwer()
    {
        return view("dashboardAdmin.HotelOwner.hotelform");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHotelOwnerRequest $request,StoreUserRequest $requestUser)
    {



       $user=  User::create([
        'name' => $requestUser['name'] ,
        'email' => $requestUser['email'],
        'password' =>  Hash::make($requestUser['password']),
        'gender' => $requestUser['gender'],
        'phone' => $requestUser['phone'],
         'image'=>isset($requestUser['image'])?$requestUser['image']-> storeAs("public/imgs",md5(microtime()).$requestUser['image']->getClientOriginalName()):null,
        ]);


       $hotelOwner= hotelOwner::create([
        'commercial_reg_No' => $request['commercial_reg_No'],
        'user_id' => $user['id']

       ]);
       $newUser = User::find($user->id);

       if(!empty ($hotelOwner)){
           $role_id =Role::where('name','hotelOwner')->limit(1)->get();
           $newUser->update(['role_id'=>$role_id[0]->id]);
       }

// print_r($hotelOwner->User);
return view("MUT.hotelOwnerSignUp",['userData'=>$hotelOwner->User]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\hotelOwner  $hotelOwner
     * @return \Illuminate\Http\Response
     */
    public function show(hotelOwner $hotelOwner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\hotelOwner  $hotelOwner
     * @return \Illuminate\Http\Response
     */
    public function edit(hotelOwner $hotelOwner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\hotelOwner  $hotelOwner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, hotelOwner $hotelOwner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\hotelOwner  $hotelOwner
     * @return \Illuminate\Http\Response
     */
    public function destroy($ID)
    {
        $DelID= hotelOwner::find($ID)->delete();
        if($DelID){
            User::where ('user_id',$ID)->delete();
        }

        return back();
    }
}

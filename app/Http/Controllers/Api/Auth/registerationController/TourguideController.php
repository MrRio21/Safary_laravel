<?php

namespace App\Http\Controllers\Api\Auth\registerationController;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\StoreTourgideRequest;
use App\Models\Tourguide;
use App\Models\TourguideLanguage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

use App\Models\User;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;

class TourguideController extends Controller
{
    public function index(){
        return TourGuide::all();
    }


    public function show ($TourguideId){
        return Tourguide::find($TourguideId);
    }
    public function store(StoreUserRequest $request){


        $user=  User::create([
            'name' => $request['name'] ,
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'gender' => $request['gender'] ,
            // 'role_id' => $request['role_id'] ,
            'image' =>$request['image']-> storeAs("public/imgs",md5(microtime()).$request['image']->getClientOriginalName()),
            ]);

            $request->validate([
        'price_per_day' => 'required',
        'syndicate_No' => 'required',
        'desc' => 'required',
    ]);

         $tourguide= Tourguide::create([
            'price_per_day' => $request['price_per_day'] ,
            'syndicate_No' => $request['syndicate_No'] ,
            'desc' => $request['desc']  ,
            'user_id' => $user['id']
           ]);
         $tourgideLanguage= TourguideLanguage::create([
            'language' => $request['language'] ,
            'tourguide_id' => $tourguide['id']
           ]);

            $newUser = User::find($user->id);

            if(!empty ($tourguide)){
                $role_id =Role::where('name','tourguide')->limit(1)->get();
                $newUser->update(['role_id'=>$role_id[0]->id]);
            }
           return $tourgideLanguage;
    }
}

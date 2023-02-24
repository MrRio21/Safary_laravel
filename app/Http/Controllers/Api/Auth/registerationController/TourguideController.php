<?php

namespace App\Http\Controllers\Api\Auth\registerationController;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\StoreTourgideRequest;
use App\Models\TourGuide;
use App\Models\TourguideLanguage;
use App\Models\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TourguideController extends Controller
{
    public function index(){
        return TourGuide::all();
    }


    public function show ($TourguideId){
        return TourGuide::find($TourguideId);
    }
    public function store(Request $request){


        $user=  User::create([
            'name' => $request['name'] ,
            'email' => $request['email'],
            'password' => $request['password'],
            'gender' => $request['gender'] ,
            'image' => $request['image'] ,
            ]);

         $tourguide=   TourGuide::create([
            'price' => $request['price'] ,
            'syndicate_No' => $request['syndicate_No'] ,
            'desc' => $request['desc']  ,
            'user_id' => $user['id']
           ]);
         $tourguideLan=   TourguideLanguage::create([
            'language' => $request['language'] ,
            'tourguide_id' => $tourguide['id']
           ]);
           return $tourguide;
    }
}

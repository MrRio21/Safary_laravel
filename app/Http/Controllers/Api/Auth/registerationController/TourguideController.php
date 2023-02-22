<?php

namespace App\Http\Controllers\Api\Auth\registerationController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TourguideController extends Controller
{
    public function index(){
        return [User::all(),tourgide::all()];
    }


    public function show ($TourguideId){
        return tourgide::find($TourguideId);
    }
    public function store(StoreTourgideRequest $request,StoreUserRequest $requestUser){
       
    
        $user=  User::create([
            'name' => $requestUser['name'] ,
            'email' => $requestUser['email'],
            'password' => $requestUser['password'], 
            'gender' => $requestUser['gender'] ,
            ]);
          
         $tourgide=   tourgide::create([
            'price' => $request['price'] ,
            'syndicate_No' => $request['syndicate_No'] ,
            'desc' => $request['desc']  ,
            'user_id' => $user['id']
           ]);
           return $tourgide;
    }
}

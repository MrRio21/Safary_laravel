<?php

namespace App\Http\Controllers\Api\Auth\registerationController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HotelOwnerController extends Controller
{
    public function index(){
        return [User::all(),hotelOwner::all()];
    }


    public function show ($hotelOwnerId){
        return hotelOwner::find($hotelOwnerId);
    }
    public function store(StoreHotelOwnerRequest $request,StoreUserRequest $requestUser){
       
    
        $user=  User::create([
            'name' => $requestUser['name'] ,
            'email' => $requestUser['email'],
            'password' => $requestUser['password'], 
            'gender' => $requestUser['gender'] ,
            ]);
          
         $hotelOwner=    hotelOwner::create([
            'commercial_reg_No' => $request['commercial_reg_No'],
            'user_id' => $user['id']
            
           ]);
           return $hotelOwner;
    }
}

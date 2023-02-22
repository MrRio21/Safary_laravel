<?php

namespace App\Http\Controllers\Api\Auth\registerationController;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;
use App\Http\Controllers\Controller;
use App\Models\HotelOwner;
use App\Models\User;
use App\Http\Requests\StoreHotelOwnerRequest;


class HotelOwnerController extends Controller
{
    public function index(){
        return HotelOwner::all();
    }


    public function show ($hotelOwnerId){
        return HotelOwner::find($hotelOwnerId);
    }
    public function store(Request $request){


        $user=  User::create([
            'name' => $request['name'] ,
            'email' => $request['email'],
            'password' => $request['password'],
            'gender' => $request['gender'] ,
            'image' => $request['image']
            ]);

         $hotelOwner=    HotelOwner::create([
            'commercial_reg_No' => $request['commercial_reg_No'],
            'user_id' => $user['id']

           ]);
           return $hotelOwner;
    }
}

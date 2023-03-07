<?php

namespace App\Http\Controllers\Api\Auth\registerationController;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;
use App\Http\Controllers\Controller;
use App\Models\HotelOwner;
use App\Models\User;
use App\Http\Requests\StoreHotelOwnerRequest;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;



class HotelOwnerController extends Controller
{
    public function index(){
        return HotelOwner::all();
    }


    public function show ($hotelOwnerId){
        return HotelOwner::find($hotelOwnerId);
    }
    public function store(StoreUserRequest $request){
        $user=  User::create([
            'name' => $request['name'] ,
            'email' => $request['email'],
            'password' => Hash::make( $request['password']),
            'gender' => $request['gender'] ,
            'phone' => $request['phone'],

            // 'role_id' => $request['role_id'] ,
            'image' =>$request['image']-> storeAs("public/imgs",md5(microtime()).$request['image']->getClientOriginalName()),
            ]);

        $request->validate(
            ['commercial_reg_No' => 'required',]
        );
         $hotelOwner=    HotelOwner::create([
            'commercial_reg_No' => $request['commercial_reg_No'],
            'user_id' => $user['id']

        ]);
            $newUser = User::find($user->id);

            if(!empty ($hotelOwner)){
                $role_id =Role::where('name','hotelOwner')->limit(1)->get();
                $newUser->update(['role_id'=>$role_id[0]->id]);
            }

               $createToken = $user->createToken($request->email)->plainTextToken;

            return response()->json([
                'hotelOwner'=>$hotelOwner, 'token'=>$createToken
            ]);
    }
}

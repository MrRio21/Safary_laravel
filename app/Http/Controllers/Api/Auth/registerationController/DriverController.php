<?php

namespace App\Http\Controllers\Api\Auth\registerationController;
use App\Http\Controllers\Controller;
use App\Models\Driver;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreDriverRequest;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Support\Facades\Hash;


class DriverController extends Controller
{

    public function index(){
        return Driver::all();
    }


    public function show ($driverId){
        return Driver::find($driverId);
    }
    public function store(Request $request){


        $user=  User::create([
            'name' => $request['name'] ,
            'email' => $request['email'],
            'password' => Hash::make( $request['password']),
            'gender' => $request['gender'] ,
            'role_id' => $request['role_id'] ,
            'image' =>$request['image']-> storeAs("public/imgs",md5(microtime()).$request['image']->getClientOriginalName()),
            ]);

            $driver=  Driver::create([
            'license' => $request['license'],
            'user_id' => $user['id']
            ]);

            return $driver;
    }
}

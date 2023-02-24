<?php

namespace App\Http\Controllers\Api\Auth\registerationController;
use App\Http\Controllers\Controller;
use App\Models\Driver;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreDriverRequest;
use App\Http\Requests\StoreUserRequest;

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
            'password' => $request['password'],
            'gender' => $request['gender'] ,
            'image' => $request['image']
            ]);

            $driver=  Driver::create([
            'license' => $request['license'],
            'user_id' => $user['id']
            ]);

            return $driver;
    }
}

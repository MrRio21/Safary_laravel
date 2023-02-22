<?php

namespace App\Http\Controllers\Api\Auth\registerationController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function index(){
        return [User::all(),driver::all()];
    }


    public function show ($driverId){
        return driver::find($driverId);
    }
    public function store(StoreRegisterRequest $request, StoreUserRequest $requestUser){
       
    
        $user=  User::create([
            'name' => $requestUser['name'] ,
            'email' => $requestUser['email'],
            'password' => $requestUser['password'], 
            'gender' => $requestUser['gender'] ,
            ]);
          
         $driver=  driver::create([
            'license' => $request['license'],
            'user_id' => $user['id']
           ]);
            
         
           return $driver;
    }
}

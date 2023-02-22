<?php

namespace App\Http\Controllers\Api\Auth\registerationController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function index(){
        return User::all();
    }
    public function show ($userId){
        return User::find($userId);
    }
    public function store(StoreUserRequest $request){
       
       $users= User::create([
            'name' => $request['name'] ,
            'email' => $request['email'],
            'password' => $request['password'], 
            'gender' => $request['gender'],
          

           ]);
           return $users;
    }
}
<?php

namespace App\Http\Controllers\Api\Auth\registerationController;
use App\Http\Requests\StoreUserRequest;
use App\Http\Controllers\Controller;
use App\Models\User;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function index(){
        return User::all();
    }
    public function show ($userId){
        return User::find($userId);
    }
    public function store(Request $request){

       $users= User::create([
            'name' => $request['name'] ,
            'email' => $request['email'],
            'password' => $request['password'],
            'gender' => $request['gender'],
            'image' => $request['image']


            ]);
            return $users;
    }
}

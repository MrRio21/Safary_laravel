<?php

namespace App\Http\Controllers\Auth\registerationController;
use App\Http\Controllers\Auth\registerationControlle\userController;
use App\Http\Requests\StoreUserRequest;
use App\Http\Controllers\Controller;
use App\Models\tourgide;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTourgideRequest;

class TourgideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::all(); //fk
        $tourGides=tourgide::all();

        return view("tourgideRegistrations.index",[ "tourGides" => $tourGides],["users"=> $users]);
        //show table from DB
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("tourgideRegistrations.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTourgideRequest $request,StoreUserRequest $requestUser)
    {
        
     
       $user=  User::create([
        'name' => $requestUser['name'] ,
        'email' => $requestUser['email'],
        'password' => $requestUser['password'], 
        'gender' => $requestUser['gender'] ,
        ]);
      
        tourgide::create([
        'price' => $request['price'] ,
        'syndicate_No' => $request['syndicate_No'] ,
        'desc' => $request['desc']  ,
        'user_id' => $user['id']
       ]);
       return redirect(route('TourgideRegistrations.index'));
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tourgide  $tourgide
     * @return \Illuminate\Http\Response
     */
    public function show(tourgide $tourgide)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tourgide  $tourgide
     * @return \Illuminate\Http\Response
     */
    public function edit(tourgide $tourgide)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tourgide  $tourgide
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tourgide $tourgide)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tourgide  $tourgide
     * @return \Illuminate\Http\Response
     */
    public function destroy(tourgide $tourgide)
    {
        //
    }
}

<?php

namespace App\Http\Controllers\Auth\registerationController;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\HotelOwner;
use App\Models\User;
use Illuminate\Validation\ValidationException;

use Illuminate\Support\Facades\Hash;
class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::all();

        
        //show table from DB
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("MUT.userSignUp");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
// dd($request);
      $user= User::create([
        'name' => $request['name'] ,
        'email' => $request['email'],
        'password' =>  Hash::make($request['password']),
        'gender' => $request['gender'],
        'phone' => $request['phone'],
        'image' =>$request['image']-> storeAs("public/imgs",md5(microtime()).$request['image']->getClientOriginalName()),
        // 'role_id' => $request['role_id']
    ]);
            print_r($user);
$createToken = $user->createToken($request->email)->plainTextToken;

    //    return redirect(route('userRegistrations.index'));
       return redirect(route('hotelOwner.create'));

    }
public function login(){
    // echo "hey ";/
    // dd($request);
    return view("MUT.userSignUp");

}
public function validateLogin(Request $request) {
    // dd($request);
    validator($request->all(),[
        'email' => 'required|email',
        'password' => 'required',

    ])->validate();
    if(auth()->attempt(request()->only(['email','password']))){

        return redirect('/MUT');
    }
    return redirect()->back()->withErrors(['email'=>'credentials invalid!']);
    // $request->validate([
    //     'email' => 'required|email',
    //     'password' => 'required',

    // ]);

    // $user = User::where('email', $request->email)->first();

    // if (! $user || ! Hash::check($request->password, $user->password)) {
    //     throw ValidationException::withMessages([
    //         'email' => ['The provided credentials are incorrect.'],
    //         // 'password' => ['The provided credentials are incorrect.'],
    //     ]);
    // }
}
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\hotelOwner  $hotelOwner
     * @return \Illuminate\Http\Response
     */
    public function show(HotelOwner $hotelOwner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\hotelOwner  $hotelOwner
     * @return \Illuminate\Http\Response
     */
    public function edit(hotelOwner $hotelOwner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\hotelOwner  $hotelOwner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, hotelOwner $hotelOwner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\hotelOwner  $hotelOwner
     * @return \Illuminate\Http\Response
     */
    public function destroy(hotelOwner $hotelOwner)
    {
        //
    }
}


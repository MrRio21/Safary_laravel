<?php

namespace App\Http\Controllers\Auth\registerationController;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\HotelOwner;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class userController extends Controller
{
    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect('/register');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::all();

        return view("dashboardAdmin.user.users",["users"=> $users]);
        //show table from DB
    }
public function editUser(){
    //
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

    public function createUser()
    {
        return view("dashboardAdmin.user.userform");
    }




    public function storeuser(StoreUserRequest $request)
    {
// dd($request);
      $user= User::create([
        'name' => $request['name'] ,
        'email' => $request['email'],
        'password' =>  Hash::make($request['password']),
        'gender' => $request['gender'],
        'phone' => $request['phone'],
        'image' =>isset($request['image'])?$request['image']-> storeAs("public/imgs",md5(microtime()).$request['image']->getClientOriginalName()):null,
        // 'role_id' => $request['role_id']
    ]);
            // print_r($user);
            $newUser = User::find($user->id);
            // dd($newUser);
// $createToken = $user->createToken($request->email)->plainTextToken;
$role= Role::where('id',$newUser->role_id)->first();

       return redirect('dashboardAdmin/user/users');

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
        'image' =>isset($request['image'])?$request['image']-> storeAs("public/imgs",md5(microtime()).$request['image']->getClientOriginalName()):null,
        // 'role_id' => $request['role_id']
    ]);
            // print_r($user);
            $newUser = User::find($user->id);
            // dd($newUser);
// $createToken = $user->createToken($request->email)->plainTextToken;
$role= Role::where('id',$newUser->role_id)->first();
// dd($role);
//    return redirect(route('userRegistrations.index'));
    //    return redirect(route('login.create',['role'=>$role->name]));

    }






public function login(Request $request){
    // dd($request->path());
    if($request->path() == 'login/driver'){
        return view("MUT.driverSignUp");
        }
    if($request->path() == 'login/hotelOwner'){
        return view("MUT.hotelOwnerSignUp");
            }
    if($request->path() == 'login/tourguide'){
        return view("MUT.tourguideSignUp");
            }else{

                return view("MUT.userSignUp");
            }
      // echo "hey ";/
    // dd($request);
    // dd(Auth::user());

}
public function validateLogin(Request $request) {
    // dd($request);
    validator($request->all(),[
        'email' => 'required|email',
        'password' => 'required',

    ])->validate();
    if(auth()->attempt(request()->only(['email','password']))){
        // dd(Auth::user());
        // if(Auth::user())

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
        return view('dashboardHotelOwner.userEdit');
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
    public function destroy(User $UserID)
    {
        User::find($userId)->delete();
        return back();
    }
}


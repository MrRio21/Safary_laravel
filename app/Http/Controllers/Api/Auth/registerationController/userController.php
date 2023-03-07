<?php

namespace App\Http\Controllers\Api\Auth\registerationController;
use App\Http\Requests\StoreUserRequest;
use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

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
            'password' =>  Hash::make($request['password']),
            'gender' => $request['gender'],
            'phone' => $request['phone'],
            'image' =>$request['image']-> storeAs("public/imgs",md5(microtime()).$request['image']->getClientOriginalName()),
            // 'role_id' => $request['role_id']
        ]);

    $createToken = $users->createToken($request->email)->plainTextToken;

        return response()->json([
                'users'=>$users, 'token'=>$createToken
            ]);
    }


    public function login(Request $request) {
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',

    ]);

    $user = User::where('email', $request->email)->first();

    if (! $user || ! Hash::check($request->password, $user->password)) {
        throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect.'],
        ]);
    }
    $role = $user->role_id;
    // dd($role);
    $createToken = $user->createToken($request->email)->plainTextToken;
    $userID = $user->tokens;
  //  foreach($userID as $user){
    //    if($user->id ==)
   // }
    return response()->json(['token'=> $createToken,'role'=>$role ,
'userid'=>$userID],201);
}


}

<?php

namespace App\Http\Controllers\Api\Auth\registerationController;
use App\Http\Controllers\Controller;
use App\Models\Driver;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreDriverRequest;
use App\Http\Requests\StoreUserRequest;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;


class DriverController extends Controller
{


    public function index(){
        return Driver::all();
    }


    public function show ($driverId){
        return Driver::find($driverId);
    }
    public function store(StoreUserRequest $request){
        $user=  User::create([
            'name' => $request['name'] ,
            'email' => $request['email'],
            'password' => Hash::make( $request['password']),
            'phone' => $request['phone'],
            'gender' => $request['gender'] ,
            // 'role_id' => $request['role_id'] ,
            'image' =>$request['image']-> storeAs("public/imgs",md5(microtime()).$request['image']->getClientOriginalName()),
            ]);

            $request->validate(
            ['license' => 'required',]
        );
            $driver=  Driver::create([
            'license' => $request['license'],
            'user_id' => $user['id']
            ]);

            $newUser = User::find($user->id);
            if(!empty ($driver)){
                $role_id =Role::where('name','driver')->limit(1)->get();
                $newUser->update(['role_id'=>$role_id[0]->id]);
            }

    $createToken = $user->createToken($request->email)->plainTextToken;

            return response()->json([
                'driver'=>$driver, 'token'=>$createToken
            ]);
    }
}

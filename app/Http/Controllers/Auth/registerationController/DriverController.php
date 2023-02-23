<?php




namespace App\Http\Controllers\Auth\registerationController;
use App\Http\Controllers\Auth\registerationControlle\userController;
use App\Http\Controllers\Controller;
use App\Models\Driver;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreDriverRequest;
use App\Http\Requests\StoreUserRequest;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::all(); //fk
        $driver=driver::all();

        return view("driverRegistrations.index",[ "driver" => $driver],["users"=> $users]);
        //show table from DB
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("driverRegistrations.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRegisterRequest $request, StoreUserRequest $requestUser)
    {

      $user=  User::create([
            'name' => $requestUser['name'] ,
            'email' => $requestUser['email'],
            'password' => $requestUser['password'],
            'gender' => $requestUser['gender'] ,
            ]);


       driver::create([
        'license' => $request['license'],
        'user_id' => $user['id']
       ]);
       return redirect(route('driverRegistrations.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function show(driver $driver)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function edit(driver $driver)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, driver $driver)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function destroy(driver $driver)
    {
        //
    }
}

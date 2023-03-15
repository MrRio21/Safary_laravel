<?php

namespace App\Http\Controllers\VehicleController;
use App\Http\Controllers\Controller;
use App\Models\Vehicle;
use App\Models\RequestRide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allVehicle =Vehicle::all();
        // dd($allVehicle);

        // return response()->json([
        //     'vehicle'=>$allVehicle
        // ]);
        return view("dashboardAdmin.allVehcile.Vechile", ["allVehicle"=> $allVehicle]);
    }

    public function create( )
    {
        return view("driver.storeVehicle");
    }

    public function store(Request $request)
    {
        // dd($request);
        // $request->validate([
        //     'type'=>'required',
        //     'license '=>'required',
        //     'image'=>'required','mimes:jpeg,png,jpg,gif',

        // ]);
        // dd(Auth::user()->Driver->id);
        $request = Vehicle::create([
            'driver_id'=>Auth::user()->Driver->id ,
            'type'=>$request['type'],
            'license'=>$request['license'],
            'image'=>$request['image']->storeAs("public/imgs",md5(microtime()).$request['image']->getClientOriginalName())
            // 'status'=>'Pendding'
        ]);
        // dd($request);
        // return response()->json([
        //     'vehicle'=>$request,
        //     'message'=>'store success'
        // ]);

    }

    public function show(Vehicle $requestRideId)
    {
        $target = Vehicle::find($requestRideId);
        return $target;
    }

    public function update(Request $request, vehicle $vehicleId )
    {
    // dd($hotelid);
    $request->update($request->all());

    return response()->json([
            'vehicle updated successfully'=>$request
    ]);
}

    public function destroy($Id)
    {
        Vehicle::find($Id)->delete();
    }
}

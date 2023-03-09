<?php

namespace App\Http\Controllers\vehicleController;
use App\Http\Controllers\Controller;

use App\Models\RequestRide;
use Illuminate\Http\Request;

class RequestRideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allVehicle =RequestRide::all();

        return isset($allVehicle)?$allVehicle:"";
    }


    public function store(Request $request)
    {
        //     $request->validate([
        //     'position'=>'required',
        //     'destination '=>'required',
        //     'date'=>'required',
        //     'type'=>'required',

        // ]);
        $requestRide = RequestRide::create([
            'user_id'=>$request['user_id'],
            'position'=>$request['position'],
            'destination'=>$request['destination'],
            'date'=>$request['date'],
            'type'=>$request['type'],
            'status'=>'Pendding'
        ]);
        return response()->json([
            'data'=>$requestRide,
            201
        ]);
    }


    public function show(RequestRide $id)
    {
        // dd($id);
        $target = RequestRide::find($id);
        return response()->json([
            'data'=>$target,
            201
        ]);
    }

    public function edit(RequestRide $requestRide)
    {
        //
    }


    public function update(Request $request, RequestRide $requestRide)
    {
        //
    }


    public function destroy(RequestRide $requestRideId)
    {
        RequestRide::find($requestRideId)->delete();

    }
}

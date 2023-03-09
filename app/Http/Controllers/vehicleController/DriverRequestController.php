<?php

namespace App\Http\Controllers\vehicleController;
use App\Http\Controllers\Controller;
use App\Models\DriverRequest;
use App\Models\RequestRide;
use Illuminate\Http\Request;

class DriverRequestController extends Controller
{

    public function index()
    {
        $data = RequestRide::all();
    }



    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(DriverRequest $driver_request)
    {
        //
    }


    public function edit(DriverRequest $driver_request)
    {
        //
    }


    public function update(Request $request, DriverRequest $driver_request)
    {
        //
    }


    function driver_trip() {
        if(auth()->user()->Driver){
            $data=RequestRide::where("status","Pendding")->get();
          //  dd($data);
            return view('driver_req',compact('data'));
        }

        else
        return 404;
    }
    public function destroy(DriverRequest $driver_request)
    {
        //
    }
}

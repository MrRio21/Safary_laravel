<?php

namespace App\Http\Controllers\tripController;
use App\Http\Controllers\Controller;
use App\Models\chosenTrip;
use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Models\Room;
use Illuminate\Support\Facades\Auth;

class ChosenTripController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ChosenTrip::create([

            'user_id'=>Auth::user()->id,
            'trip_id'=>$request->trip_id
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\chosenTrip  $chosenTrip
     * @return \Illuminate\Http\Response
     */
    public function show(chosenTrip $chosenTrip)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\chosenTrip  $chosenTrip
     * @return \Illuminate\Http\Response
     */
    public function edit(chosenTrip $chosenTrip)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\chosenTrip  $chosenTrip
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, chosenTrip $chosenTrip)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\chosenTrip  $chosenTrip
     * @return \Illuminate\Http\Response
     */
    public function destroy(chosenTrip $chosenTrip)
    {
        //
    }


    public function test()
    {
        $budget= 5;
        $ns = 5;
        $nd = 0;
        $nt = 1;
        $i = 0;
        $packeg = [];

        $hotels= Hotel::all();
        foreach ($hotels as $hotel)
        {
            $ts = Room::where('type', 'single')->where('hotel_id', $hotel->id)->first();
            $td = Room::where('type', 'double')->where('hotel_id', $hotel->id)->first();
            $tt = Room::where('type', 'triple')->where('hotel_id', $hotel->id)->first();
        
            if (($ns*$ts['price'] + $nd*$td['price']) + $nt*$tt['price'] <= $budget)
            {
                $packeg[$i] = [
                    'single' => ['room' => $ts, 'number' => $ns],
                    'double' => ['room' => $td, 'number' => $nd],
                    'triple' => ['room' => $tt, 'number' => $nt]
                ];
                $i++;
            }
        }
        dd($packeg);
    }
}

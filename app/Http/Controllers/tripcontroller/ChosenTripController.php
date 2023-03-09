<?php

namespace App\Http\Controllers\tripController;
use App\Http\Controllers\Controller;
use App\Models\chosenTrip;
use Illuminate\Http\Request;
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
}

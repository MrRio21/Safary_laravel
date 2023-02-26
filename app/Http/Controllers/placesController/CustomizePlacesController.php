<?php

namespace App\Http\Controllers\placesController;
use App\Http\Controllers\Controller;
use App\Models\CustomizePlaces;
use Illuminate\Http\Request;

class CustomizePlacesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $custPlaces = CustomizePlaces::all();
        return $custPlaces;
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\customizePlaces  $customizePlaces
     * @return \Illuminate\Http\Response
     */
    public function show(CustomizePlaces $customizePlaces)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\customizePlaces  $customizePlaces
     * @return \Illuminate\Http\Response
     */
    public function edit(CustomizePlaces $customizePlaces)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\customizePlaces  $customizePlaces
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CustomizePlaces $customizePlaces)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\customizePlaces  $customizePlaces
     * @return \Illuminate\Http\Response
     */
    public function destroy(CustomizePlaces $customizePlaces)
    {
        //
    }
}

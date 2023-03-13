<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\place;
use App\Models\PlaceImg;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;



class ViewPlacesController extends Controller
{
    //
    public function index()
    {
        $allPlaces =Place::all();
        $placeImg= PlaceImg::all();
        return view("allPlaces.allPlaces",["allPlaces"=>$allPlaces , "placeImg"=>$placeImg]);
    }
}

<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\tourguide;
use App\Models\TourguideLanguage;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class ViewTourGidesController extends Controller
{
    //
    public function index()
    {
        $allTourGides = Tourguide::all();
        $tourguideLanguage= TourguideLanguage::all();

        // $tourguideLanguage= TourguideLanguage::where('tourguide_id', $allTourGides -> $allTourGides);

        return view("allTourguide.allTourguide",["allTourGides" => $allTourGides],["tourguideLanguage" => $tourguideLanguage]);
    }
}

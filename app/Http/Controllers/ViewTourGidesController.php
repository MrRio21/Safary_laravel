<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\tourguide;


class ViewTourGidesController extends Controller
{
    //
    public function index()
    {
        return view("allTourguide.allTourguide");
    }
}

<?php

namespace App\Http\Controllers\Api;
use App\Models\Hotel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index()
    {
        $allHotels =Hotel::all();
        return $allHotels ;
    }

}

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
         $tourlanguage='';
        //  $items='';
        foreach($allTourGides as $tour){
            $tourlanguage= $tour->languages;
          

        }
        return view("allTourguide.allTourguide",compact('allTourGides','tourguideLanguage'));

        // $tourguideLanguage= TourguideLanguage::where('tourguide_id', $allTourGides -> $allTourGides);

    }

    public function bookWithTourguide(Order $order,Request $request,Tourguide $tourguide){
        // dd($tourguide);
        // dd($request->restBudgetBeforeTourguide);
    //     BookTourGuide::create([
    //    'tourguide_id'=>$tourguide->id,
    //    'order_id'=>$order->id,
    //    'n_of_days'=>$order->n_of_days
    //     ]);
            $restOfBudgetAfterAllBooking=$order->budget-($request->restBudgetBeforeTourguide+($tourguide->price_per_day*$order->n_of_days));
            dd($restOfBudgetAfterAllBooking);

    return redirect()->back()->with('Your request send successfully!');
    }
}
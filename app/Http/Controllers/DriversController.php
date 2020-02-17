<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\drvregisters;
use Auth;
use Illuminate\Support\Facades\DB;
use App\FeedbackDriver;
use App\DriverBooking;

class DriversController extends Controller
{
  
    public function show($id)
    {
       
         $driver = drvregisters::find($id);
         $rate = FeedbackDriver::where('driver_id', $id);
         $id2 = Auth::user()->id;
         $booking = DriverBooking::where('driver_id', $id)
                                 ->where('tourist_id', $id2)->latest('created_at')->first();
        return view('pages.driver_profile',compact('driver','rate','booking'));
    }


   
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\eqpregisters;
use Auth;
use Illuminate\Support\Facades\DB;
use App\FeedbackEquipment;
use App\EquipmentBooking;

class EquipmentController extends Controller
{
    
    public function show($id)
    {
       
         $equipment = eqpregisters::find($id);
        
         $rate = FeedbackEquipment::where('equipment_id', $id);
       
         $id2 = Auth::user()->id;
         $booking = EquipmentBooking::where('equipment_id', $id)
                                     ->where('tourist_id', $id2)->latest('created_at')->first();
        return view('pages.equipment_profile',compact('equipment','rate','booking'));
    }



    
}

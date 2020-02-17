<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\EquipmentBooking;
use App\eqpregisters;

class EquipmentBookingController extends Controller
{
    public function index2($id){
        $equipment = eqpregisters::find($id);
        return view('tourist.booking_form.equipment_booking',compact('equipment'));
    }

    public function create(Request $request)
    {

        $this -> validate($request,[
            
            'start_date' => 'required|date|after_or_equal:tomorrow',
            'end_date' => 'required|date|after_or_equal:start_date',
            'district' =>'required',
            'nop' =>'min:1|max:20|numeric',
            'note' =>'max:255',
        ]);  

        $booking =new EquipmentBooking;
        $booking->tourist_id = Auth::user()->id;
        $booking->equipment_id = $request->equipment_id;
        $booking->start_date = $request->start_date;
        $booking->end_date = $request->end_date;
      //  $booking->district = $request->district;
       // $booking->nop = $request->nop;
        $booking->note =$request->note;
        $booking->book_flag =0;
        $booking->finiesd_flag =0;

        $booking->save();

        $num = $request->equipment_id;
        
        return redirect()->route('status_equipment', [$num]);
       
    }

}

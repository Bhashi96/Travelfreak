<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\GuideBooking;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\GuideBookingRequest;

class GuideBookingController extends Controller
{

    public function index(){
        return view('tourist.booking_form.guide_booking');
    }
   

    
    /**
     * 
     *
     * @param  array  $data
     * @return \App\User
     */
    
    public function create(GuideBookingRequest $request)
    {


        $booking =new GuideBooking;
        $booking->tourist_id = Auth::user()->id;
        $booking->guide_id = 9;
        $booking->start_date = $request->start_date;
        $booking->end_date = $request->end_date;
        $booking->district = $request->district;
        $booking->nop = $request->nop;
        $booking->note =$request->note;

        $booking->save();

        return redirect()->route('status');
    }

}

<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\GuideBooking;
use App\gudregisters;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\GuideBookingRequest;

class GuideBookingController extends Controller
{

    public function index2($id){
        $guide = gudregisters::find($id);
        


        return view('tourist.booking_form.guide_booking',compact('guide'));
    }
    
   /* public function index3($id){
        $book = GuideBooking::find($id);
        return view('tourist.status.waiting_guide',compact('book'));
    } */
    

    
    /**
     * 
     *
     * @param  array  $data
     * @return \App\User
     */
    
    public function create(GuideBookingRequest $request)
    {

        $this -> validate($request,[
            'start_date' =>'required|date|afer:tomorrow',
           // 'start_date' => 'required|date|after:tomorrow',
            'end_date' =>'required|date|after:start_date',
            'district' =>'required',
            'nop' =>'min:1|max:20|numeric',
            'note' =>'max:255', 
        ]);  

        $booking =new GuideBooking;
        $booking->tourist_id = Auth::user()->id;
        $booking->guide_id = $request->guide_id;
        $booking->start_date = $request->start_date;
        $booking->end_date = $request->end_date;
        $booking->district = $request->district;
        $booking->nop = $request->nop;
        $booking->note =$request->note;
        $booking->book_flag =0;
        $booking->finiesd_flag =0;

        $booking->save();

        $num = $request->guide_id;
        $num2 = Auth::user()->id;
       
        return redirect()->route('status_guide', [$num,$num2]);
       
        
    }

}

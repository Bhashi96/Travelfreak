<?php


namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\DriverBooking;
use App\drvregisters;
use Illuminate\Support\Facades\Validator;


class DriverBookingController extends Controller
{
    
    public function index2($id){
        $driver = drvregisters::find($id);
        return view('tourist.booking_form.driver_booking',compact('driver'));
        //$driver = eqpregisters::find($id);
        $drvbooking=DriverBooking::paginate(15);
        return view('tourist.booking_form.driver_booking',compact('driver'));
       // return view('tourist.booking_form.eqp_booking',compact('eqp'));
    }

    public function Validator(array $data)
    {
        return Validator::make($data, [
           
            'tourist_id'=>'required',
            'eqp_id'=>'required',
            'from'=> 'required',
            'to'=> 'required',
            'date' => 'required|date|after_or_equal:tomorrow',
            'time'=> 'required',
            'note'=> 'nullable',
            
           
        ]);
    }

    /**
     * 
     *
     * @param  array  $data
     * @return \App\User
     */
    
    public function create(Request $request)
    {

        $booking =new DriverBooking;
        $booking->tourist_id = Auth::user()->id;
        $booking->driver_id = $request->driver_id;
        $booking->from = $request->from;
        $booking->to = $request->to;
        $booking->date = $request->date;
        $booking->time = $request->time;
        $booking->note =$request->note;
        $booking->book_flag =0;
        $booking->finiesd_flag =0;

        $booking->save();

        $num = $request->driver_id;

        return redirect()->route('status_driver', [$num]);
    }

    public function show($id)
    {
        //
    }
    

    public function edit($id)
    {
        //
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
       

        $drvbooking=DriverBooking::find($id);
        $drvbooking ->book_flag = $request->input('book_flag');

        $drvbooking->save();
        
       // $drvbooking->book_flag->update($request->input());
        return back();
    }


}

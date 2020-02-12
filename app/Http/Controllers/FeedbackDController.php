<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\FeedbackDriver;
use App\Drivers;
use Illuminate\Support\Facades\Validator;

class FeedbackDriverController extends Controller
{
    

    public function index1($id){
       
        $driver = Drivers::find($id);
        return view('tourist.booking_form.feedback_driver',compact('driver'));

    }

    
    public function index2($id){
       
        $driver = Drivers::find($id);
        return view('tourist.status.waiting_driver',compact('driver'));
    }

    public function Validator(array $data)
    {
        return Validator::make($data, [
           
            'tourist_id'=>'required',
            'sp_id'=>'required',
            'service_id'=>'required',
            'rate'=> 'required',
            'comment'=> 'required',
            
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

        $rating =new Feedback;
        $rating->tourist_id = Auth::user()->id;
        $rating->sp_id = $request->sp_id;
        $rating->service_id = 007;
        $rating->rate = $request->rate;
        $rating->comment = $request->comment;
        
        $rating->save();

        return redirect()->route('home');
    }
}


<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Feedback;
use Illuminate\Support\Facades\Validator;

class FeedbackController extends Controller
{
    public function index(){
        return view('tourist.booking_form.feedback');
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
        $rating->sp_id = 9;
        $rating->service_id = 007;
        $rating->rate = $request->rate;
        $rating->comment = $request->comment;
        

        $rating->save();

        return redirect()->route('home');
    }
}

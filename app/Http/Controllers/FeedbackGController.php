<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\FeedbackGuide;
use App\Guides;

use Illuminate\Support\Facades\Validator;

class FeedbackGuideController extends Controller
{
    

    public function index1($id){
        
        $guide = Guides::find($id);
        return view('tourist.booking_form.feedback_guide',compact('guide'));

    }

    // public function index2($id){
    //     $guide = Guides::find($id);
    //     return view('tourist.booking_form.feedback',compact('guide'));
    // }

    
   
    public function index2($id){
       
        $guide = Guides::find($id);
        return view('tourist.status.waiting_guide',compact('guide'));
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



<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\FeedbackGuide;
use App\gudregisters;
use Illuminate\Support\Facades\DB;
use App\GuideBooking;
use Illuminate\Support\Facades\Validator;

class FeedbackGuideController extends Controller
{
    

    public function index1($id){
        
        $guide = gudregisters::find($id);
        return view('tourist.booking_form.feedback_guide',compact('guide'));

    }

    // public function index2($id){
    //     $guide = Guides::find($id);
    //     return view('tourist.booking_form.feedback',compact('guide'));
    // }

    
   
   // public function index2($id,$id2){
    public function index2($id){
        $id2=Auth::user()->id;
        $guide = gudregisters::find($id);
        $booking = GuideBooking::where('guide_id', $id)
                                              ->where('tourist_id', $id2)->latest('created_at')->first();
        // dd($booking->book_flag);
        return view('tourist.status.waiting_guide',compact('guide','booking'));
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

        $rating =new FeedbackGuide;
        $rating->tourist_id = Auth::user()->id;
        $rating->guide_id = $request->guide_id;
        $rating->service_id = 007;
        $rating->rate = $request->rate;
        $rating->comment = $request->comment;
        
        $rating->save();

        return redirect()->route('home');
    }
}



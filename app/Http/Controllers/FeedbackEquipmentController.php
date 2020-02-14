<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\FeedbackEquipment;
use App\eqpregisters;
class FeedbackEquipmentController extends Controller
{
    public function index1($id){
        
        $equipment = eqpregisters::find($id);
        return view('tourist.booking_form.feedback_equipment',compact('equipment'));

    }

    public function index2($id){
       
        $equipment = eqpregisters::find($id);
        return view('tourist.status.waiting_equipment',compact('equipment'));
    }

    public function Validator(array $data)
    {
        return Validator::make($data, [
           
            'tourist_id'=>'required',
            'equipment_id'=>'required',
            'service_id'=>'required',
            'rate'=> 'required',
            'comment'=> 'required',
            
        ]);
    }
   
   public function create(Request $request)
   {

       $rating =new FeedbackEquipment;
       $rating->tourist_id = Auth::user()->id;
       $rating->equipment_id = $request->equipment_id;
       $rating->service_id = 007;
       $rating->rate = $request->rate;
       $rating->comment = $request->comment;
       
       $rating->save();

       return redirect()->route('home');
   }

}





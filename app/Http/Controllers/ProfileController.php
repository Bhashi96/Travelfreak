<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\User;
use App\touregister;
use Illuminate\Support\Facades\Hash; 
use Illuminate\Support\Facades\Storage; 

class ProfileController extends Controller
{
    public function index1()
    {
        $user = touregister::find(Auth::user()->id);
        return view('tourist.user_profile.user_profile')->with
                    (['user' => $user,]);
    
    }

    public function index2()
    {
       // $user = Auth::user();
       $user = touregister::find(Auth::user()->id);
        return view('tourist.user_profile.user_profile_edit')->with
                    (['user' => $user,]);
    
    }

    public function update(Request $request,$id)
    {
        $this -> validate($request,[
            'name' =>'required|min:3|max:50|string',
            'cotact' =>'string|min:9|max:10',
            'country' =>'required|max:50|string',
        ]);

       
        
           
       
        $user = touregister::find(Auth::user()->id);

      
     

        $user->name= $request->get('name');  
        $user->email = $request->get('email');
        $user->country= $request->get('country');  
        $user->contact = $request->get('contact');
        
        if( $request-> has('image_path')){
            $image=$request->file('image_path');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('images/tourist'),$filename);
            $user->image_path=$request->file('image_path')->getClientOriginalName();
        }
        
        $user->save();
    
        return redirect('/user_profile');
        
    }
}
 
<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index1()
    {
        $user = User::find(Auth::user()->id);
        return view('tourist.user_profile.user_profile')->with
                    (['user' => $user,]);
    
    }

    public function index2()
    {
        $user = Auth::user();
        return view('tourist.user_profile.user_profile_edit')->with
                    (['user' => $user,]);
    
    }

    public function update(Request $request,$id)
    {
        $this -> validate($request,[
            'name' =>'required|min:3|max:50|string',
            'email' =>'required|email|unique:users,email',
           // 'mobile-no' =>'integer|min:10|max:15',
            'country' =>'required|max:50|string',
            'password' =>'min:6|required_with:re-pass|same:re-pass',
            're-pass' =>'min:6',
        ]);

        $user = User::find($id);
        $user->name= $request->get('name');  
        $user->email = $request->get('email');
        $user->password = Hash::make($request->get('password'));
        $user->save();
        
        return redirect('/user_profile');
        
    }
}
 
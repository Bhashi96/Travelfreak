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
            'email' =>'email|unique:users,email',
            'cotact' =>'string|min:10|max:10',
            'country' =>'required|max:50|string',
           // 'password' =>'min:6|required_with:re-pass|same:re-pass',
           // 're-pass' =>'min:6',
         //   'image' => 'required',
        ]);

       
        
           
        //$user = User::find($id);
        $user = touregister::find(Auth::user()->id);

       // $image ->request('image')->store('public');
      /* if($request->hasfile('image')) 

       $image_path = $request->image->getClientOriginalName();
       $request->image->store('public/upload',$image_path);  */

       $path = $request->file('image')->store('images');

       
    //   $path = Storage::putFile('images', $request->file('image'));

        $user->name= $request->get('name');  
        $user->email = $request->get('email');
        $user->country= $request->get('country');  
        $user->cotact = $request->get('cotact');
        $user->image_path =$path;
      //  $user->password = Hash::make($request->get('password'));
        
      /*  if($request->hasfile('image')) {
            $file=$request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/user/',$filename);
            $user->image_path=$filename;
        }
        else{

            return $request;
        } */ 
        $user->save();
    
        return redirect('/user_profile');
        
    }
}
 
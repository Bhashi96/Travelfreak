<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\touregister;
use App\drvregisters;
use App\gudregisters;
use App\eqpregisters;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
   // protected $redirectTo = '/home';
    protected function redirectTo()
    {
        if(Auth::user()->user_type=='gud'){
            return 'gudhome' ;
        }else if(Auth::user()->user_type=='drv')
        {
            return 'drvhome' ;
        }else if(Auth::user()->user_type=='eqp')
        {
            return 'eqphome' ;
        
        }else {
            return 'home';
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:4', 'confirmed'],
            
           
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)


    {
        $count = DB::table('users')->count();

        if($data['user_type']=="tou"){


        $treg=new touregister;
        $treg->id=$count+1;
        $treg->email=$data['email'];
        $treg->name=$data['name'];
       
        $treg->country=$data['country'];
        $treg->contact=$data['contact'];
        $treg->image_path='images/user.png';
        $treg->save();


        }else if($data['user_type']=="gud"){
            $greg=new gudregisters;
            $greg->id=$count+1;
            $greg->email=$data['email'];
            $greg->name=$data['name'];
            $greg->contact=$data['contact'];
            $greg->gender=$data['gender'];
            $greg->age=$data['age'];
            $greg->licence=$data['licence'];
            $greg->area=$data['area'];
            $greg->languages=$data['languages'];
            $greg->image_path='images/user.png';
            $greg->price=$data['charge'];

            $greg->save();
        }else if($data['user_type']=="drv"){
            $dreg=new drvregisters;
            $dreg->id=$count+1;
            $dreg->email=$data['email'];
            $dreg->name=$data['name'];
            $dreg->contact=$data['contact'];
            $dreg->gender=$data['gender'];
            $dreg->age=$data['age'];
            $dreg->licence=$data['licence'];
            $dreg->v_reg_no=$data['vrn'];
            $dreg->image_path='images/user.png';
            

            $dreg->save();
        }else{

            $ereg=new eqpregisters;
            $ereg->id=$count+1;
            $ereg->email=$data['email'];
            $ereg->name=$data['name'];
            $ereg->contact=$data['contact'];
            $ereg->address=$data['address'];
            $ereg->area=$data['area'];
            $ereg->image_path='images/user.png';
            
            $ereg->save();
           
        }


        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'user_type' => $data['user_type'],
            
        ]);
    }
}

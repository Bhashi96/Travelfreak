<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Drvregisters;
use Illuminate\Support\Facades\Validator;

///
use Illuminate\Support\Facades\Hash; 
use Illuminate\Support\Facades\Storage; 

class DrvregisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
        $drvregisters = Drvregisters::all()->toArray();
        $drvregs=Driveregisters::paginate(15);
        return view('serviceprovider.drvhome', compact('drvregisters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('serviceprovider.drvedit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request,[
           
        //    'name' => 'required',
        //    'email'=> 'required',
        //    'contact'=> 'required',
        //    'age'=> 'required',
        //    'gender'=> 'required',
        //    'licence'=> 'required',
        //    'v_reg_no'=> 'required'


        // ]);

        // $drvregister= new Drvregister([

        //     'name' => $request->get('name'),
        //     'email'=> $request->get('email'),
        //     'contact'=> $request->get('contact'),
        //     'age'=> $request->get('age'),
        //     'gender'=> $request->get('gender'),
        //     'licence'=> $request->get('licence'),
        //     'v_reg_no'=> $request->get('v_reg_no'),
        //     'v_brand'=> $request->get('v_brand'),
        //     'v_seats'=> $request->get('v_seats')
            

        // ]);
        $drvregister->save();
        return redirect()->route('serviceprovider.drvedit')->with('success','Data Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function validate1(array $data){
        return validator::make($data,[
            'name'=>['required','string','max:255'],
            'email'=>['required','string','max:255'],
            'contact'=>['required','string'],   
            'age'=>['required','string'],
            'gender'=>['required','string'],
            'licence'=>['required','string'],
            'v_reg_no'=>['required','string'],
            'v_brand'=> ['required'],
            'v_seats'=> ['required'],

            // 'name'=>[''],
            // 'email'=>[''],
            // 'contact'=>[''],
            // 'age'=>[''],
            // 'gender'=>[''],
            // 'licence'=>[''],
            // 'v_reg_no'=>[''],

        ]);

    }

    public function update(Request $request,$id){
        // dd($request->all());
        $this->validate1($request->all())->validate();
        $user=user::find($id);
        // dd($user->age);
        $id=Auth::user()->drv->id;
        // dd($id);
        $drvregister=drvregisters::find($id);
        // dd($drvregister);
        // dd($drvregister);

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        // $user->contact = $request->input('contact');
        // $user->age = $request->input('age');
        // $user->gender = $request->input('gender');
        // $user->licence = $request->input('licence');
        // $user->v_reg_no = $request->input('v_reg_no');

        $drvregister ->name = $request->input('name');
        $drvregister->email = $request->input('email');
        $drvregister->contact = $request->input('contact');
        $drvregister->age = $request->input('age');
        $drvregister->gender = $request->input('gender');
        $drvregister->licence = $request->input('licence');
        $drvregister->v_reg_no = $request->input('v_reg_no');
        $drvregister->v_brand = $request->input('v_brand');
        $drvregister->v_seats = $request->input('v_seats');


/////////////////////////////
        if( $request-> has('image_path')){
            $image=$request->file('image_path');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('images/driver'),$filename);
            $drvregister ->image_path=$request->file('image_path')->getClientOriginalName();
        }
        if( $request-> has('img')){
            $img=$request->file('img');
            $filename = $img->getClientOriginalName();
            $img->move(public_path('images/vehical'),$filename);
            $drvregister ->img=$request->file('img')->getClientOriginalName();
        }

        $drvregister->save();
        $user->save();

        // return redirect('/drveditdetails');
        // return redirect()->action('DrvController@drvhome',compact('drvedit'));
       return back();
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Gudregisters;
use Illuminate\Support\Facades\Validator;

class GudregisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gudregisters = Gudregisters::all()->toArray();
        return view('serviceprovider.gudhome', compact('gudregisters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('serviceprovider.gudedit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[

        'name' => 'required',
        'email'=> 'required',
        'contact'=> 'required',
        'age'=> 'required',
        'gender'=> 'required',
        'licence'=> 'required',
        'area' => 'required',
        'price' => 'required'

        ]);

        $gudregister= new Gudregister([

            'name' => $request->get('name'),
            'email'=> $request->get('email'),
            'contact'=> $request->get('contact'),
            'age'=> $request->get('age'),
            'gender'=> $request->get('gender'),
            'licence' => $request->get('licence'),
            'area'=> $request->get('area'),
            'price'=> $request->get('price')

        ]);
        $gudregister->save();
        return redirect()->route('serviceprovider.gudedit')->with('success','Data Added');
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
     */public function validate1(array $data){
        return validator::make($data,[
            'name'=>['required','string','max:255'],
            // 'email'=>['required','string','max:255'],
            // 'contact'=>['required','string'],   
            // 'age'=>['required','string'],
            // 'gender'=>['required','string'],
             // 'licence'=>['required','string'],
            //'area' =>['required','string'],
            //'price'=>['required','int'],

            // 'name'=>[''],
            // 'email'=>[''],
            // 'contact'=>[''],
            // 'age'=>[''],
            // 'gender'=>[''],
            // 'licence'=>[''],
             //'area' =>['required','string'],
            //'price'=>['required','int'],

        ]);

    }

    public function update(Request $request,$id){
        // dd($request->name);
        $this->validate1($request->all())->validate();
        $user=user::find($id);
        $id=Auth::user()->gud->id;
        // dd($id);
        $gudregister=$gudregisters::find($id);
        // dd($gudregister);
        // dd($gudregister);

        $user->name = $request->input('name');

        $gudregister->name = $request->input('name');
        // $gudregister->email = $request->input('email');
        // $gudregister->contact = $request->input('contact');
        // $gudregister->age = $request->input('age');
        // $gudregister->gender = $request->input('gender');
        // $gudregister->licence = $request->input('licence');
        // $gudregister->area = $request->input('area' );
        // $gudregister->price = $request->input('price' );

        $gudregister->save();
        $user->save();

        // return redirect()->action('GudController@gudhome',compact('gudedit'));
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

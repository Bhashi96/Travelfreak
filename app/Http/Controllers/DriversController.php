<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\drvregisters;
class DriversController extends Controller
{
  /*  public function index()
    {
        $driver = Guides::all();
        return view('includes.user_home.profile_container',compact('driver'));
        // return view('guides.index',compact('guide'));
    } */

    public function show($id)
    {
        $driver = drvregisters::find($id);
        return view('pages.driver_profile',compact('driver'));
    }  
}

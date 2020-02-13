<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Drivers;
use App\Guides;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        
        $guide = Guides::all();
       // return view('home',compact('guide'));
        $driver = Drivers::all();
        return view('home',compact('driver','guide'));
        
    }
}

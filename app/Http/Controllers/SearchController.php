<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\drvregisters;
use App\gudregisters;
use App\eqpregisters;



class SearchController extends Controller
{
    public function index(Request $request)  {
      /*  $guide = gudregisters::all();
        $driver = drvregisters::all();
        $eqp = eqpregisters::all();
        return view('home',compact('driver','guide','eqp')); */
        
        $area = $request->input('district');
        $type = $request->input('type');

        if($type=="guide") {
           
            $service = DB::table('gudregisters')->where('area','$area');
            return view('tourist.home.search',compact('service'));
            
        
        }else if($type=="driver"){


            $service = DB::table('drvregisters')->where('area','$area');
            return view('tourist.home.search',compact('service'));
            

        }else if($type=="equipment"){

            $service = DB::table('eqpregisters')->where('area','$area');
            return redirect()->route('tourist.home.search_page',compact('service'));
          //  return view('tourist.home.search',compact('service'));
            
        }
    }
        public function filter(Request $request){

            $area = $request->input('district');
            $type = $request->input('type');
    
            if($type=="guide") {
               
                $service = DB::table('gudregisters')->where('area','$area');
                return redirect()->route('tourist.home.search_page',compact('service'));
              //  return view('tourist.home.search_page',compact('service'));
                
            
            }else if($type=="driver"){
    
    
                $service = DB::table('drvregisters')->where('area','$area');
                return redirect()->route('tourist.home.search_page',compact('service'));
               // return view('tourist.home.search_page',compact('service'));
                
    
            }else if($type=="equipment"){
    
                $service = DB::table('eqpregisters')->where('area','$area');
                return redirect()->route('tourist.home.search_page',compact('service'));
            }
               // return view('tourist.home.search_page',compact('service'));
                
            }   
        }    


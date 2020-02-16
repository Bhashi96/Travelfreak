<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\drvregisters;
use App\gudregisters;
use App\eqpregisters;
use App\touregister;
use App\DriverBooking;
use App\EquipmentBooking;
use App\GuideBooking;
use App\User;




class AdminController extends Controller
{
    public function index()
    {
        
        $guide = gudregisters::all();
        $driver = drvregisters::all();
        $equipment = eqpregisters::all();
        $tourist = touregister::all();
        return view('admin.home.admin_home',compact('driver','guide','equipment','tourist'));
        
    }


    public function tourist_delete($id)
    {
        
        DB::table('users')->where('id',$id)->delete();
        DB::table('touregisters')->where('id',$id)->delete();
       
        return redirect ('/admin_home');
        
    }

    public function equipment_delete($id)
    {
        
        DB::table('users')->where('id',$id)->delete();
        DB::table('eqpregisters')->where('id',$id)->delete();
       
        return redirect ('/admin_home');
        
    }

    public function guide_delete($id)
    {
        
        DB::table('users')->where('id',$id)->delete();
        DB::table('gudregisters')->where('id',$id)->delete();
      
        return redirect ('/admin_home');
        
    }

    public function driver_delete($id)
    {
        
        DB::table('users')->where('id',$id)->delete();
        DB::table('drvregisters')->where('id',$id)->delete();
       
        return redirect ('/admin_home');
        
    }

    public function booking_guide()
    {
       // DB::table('users')->where('id',$id)->delete();
        $finised = DB::table('guide_bookings')->where('finiesd_flag', '1');
        $booked = DB::table('guide_bookings')->where('finiesd_flag', '0')
                                             ->where('book_flag', '1');
       /* $booked = DB::table('guide_bookings')
            ->whereColumn([
                ['finiesd_flag', '=', '0'],
                ['book_flag', '=', '1']
            ])->get(); */

        $pending = DB::table('guide_bookings')->where('book_flag', '0');
       // $finised = gudregisters::all();
      //  $booked = drvregisters::all();
      //  $pending = eqpregisters::all();
        return view('admin.home.admin_guide_booking_results',compact('finised','booked','pending'));
        
    }


    public function booking_driver()
    {
        $finised = DB::table('driver_bookings')->where('finiesd_flag', '1');
        $booked = DB::table('driver_bookings')->where('finiesd_flag', '0')
                                             ->where('book_flag', '1');

        $pending = DB::table('driver_bookings')->where('book_flag', '0');
        return view('admin.home.admin_driver_booking_results',compact('finised','booked','pending'));
        
    }
    
}

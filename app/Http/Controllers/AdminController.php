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
    public function __construct(){
        $this->middleware('admin');
    }


    public function index()
    {
       //dd('test');
        $guide = gudregisters::all();
        $driver = drvregisters::all();
        $equipment = eqpregisters::all();
        $tourist = touregister::all();
        $g_booking = GuideBooking::all();
        $i=1;
        $j=0;

        $g_finised = GuideBooking::where('finiesd_flag', $i)
                                ->where('book_flag', $i);

        $g_booked = GuideBooking::where('finiesd_flag', $j)
                                ->where('book_flag', $i);

        $g_pending =GuideBooking::where('finiesd_flag', $j)
                               ->where('book_flag', $j);

        $d_finised = DriverBooking::where('finiesd_flag', $i)
                               ->where('book_flag', $i);

        $d_booked = DriverBooking::where('finiesd_flag', $j)
                               ->where('book_flag', $i);

        $d_pending = DriverBooking::where('finiesd_flag', $j)
                              ->where('book_flag', $j);
        
        $e_finised = EquipmentBooking::where('finiesd_flag', $i)
                              ->where('book_flag', $i);

        $e_booked = EquipmentBooking::where('finiesd_flag', $j)
                              ->where('book_flag', $i);

        $e_pending = EquipmentBooking::where('finiesd_flag', $j)
                             ->where('book_flag', $j);

        
        
        return view('admin.home.admin_home',compact('driver','guide','equipment','tourist',
                                                    'g_finised','g_booked','g_pending',
                                                    'd_finised','d_booked','d_pending',
                                                    'e_finised','e_booked','e_pending', 'g_booking',                                               
                                                ));
        
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

   /* public function booking_guide()
    {
      
        $i=1;
        $j=0;

        $finised = GuideBooking::where('finiesd_flag', $i)
                                ->where('book_flag', $i);

        $booked = GuideBooking::where('finiesd_flag', $j)
                                ->where('book_flag', $i);

        $pending =GuideBooking::where('finiesd_flag', $j)
                               ->where('book_flag', $i);

        return redirect ('/admin.home.admin_guide_booking_results',compact('finised','booked','pending'));
       // return view('admin.home.admin_guide_booking_results',compact('finised','booked','pending'))

    public function booking_driver()
    {
        $finised = DB::table('driver_bookings')->where('finiesd_flag', '1');
        $booked = DB::table('driver_bookings')->where('finiesd_flag', '0')
                                             ->where('book_flag', '1');

        $pending = DB::table('driver_bookings')->where('book_flag', '0');
        return view('admin.home.admin_driver_booking_results',compact('finised','booked','pending'));
        
    }  */
    



}

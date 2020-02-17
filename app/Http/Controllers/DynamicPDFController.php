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
use PDF;

class DynamicPDFController extends Controller
{

    public function index()
    {
        $data = $this->get_data();
        return view('dynamic_pdf')->with('data',$data);

    }

    public function get_data()
    {
        $data = DB::table('guide_bookings')
                        //->limit(10)
                        ->get();

        return $data;

    }

    public function pdf()
    {
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->
                        concert_data_to_html());  
        $pdf->stream();

    }

    public function concert_data_to_html()
    {
        $data = $this->get_data();
        $output = ' <tr>
                        <th>Guide</th>
                        <th>Tourist</th>
                        <th>District</th>
                        <th>Nop</th>
                        <th>Start date</th>
                        <th>End date</th>
                    </tr> ';
                    foreach($data as $value)
                    {
                        $output .='

                                <tr>
                                    <td> '.$value->guide_id.'</td>
                                    <td>'. $value->tourist_id.'</td>
                                    <td>'. $value->district.'</td>
                                    <td>'. $value->nop.'</td>
                                    <td>'. $value->start_date.'</td>
                                    <td>'.$value->end_date.'</td>
                        
                                </tr> '; }
                    
                        $output.= '</table>';
                        return $output;

    }

    
}


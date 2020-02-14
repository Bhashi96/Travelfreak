<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\eqpregisters;
class EquipmentController extends Controller
{
    //
    public function show($id)
    {
        $equipment = eqpregisters::find($id);
        return view('pages.equipment_profile',compact('equipment'));
    }  
}

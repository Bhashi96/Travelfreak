<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drivers extends Model
{
    protected $fillable = ['name','age','experience','contact_no','vehicle_no','licence_id','chargeperday']; 
}

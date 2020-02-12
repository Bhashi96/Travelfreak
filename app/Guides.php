<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guides extends Model
{
    protected $fillable = ['name','age','experience','language','chargeperday']; 
}


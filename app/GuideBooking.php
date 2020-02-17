<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GuideBooking extends Model
{
    protected $table = 'guide_bookings';
    protected $fillable = ['tourist_id'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class thread extends Model
{
    //
    protected $guarded=[];

    
    public function user(){

        return $this->belongsto( user::class);

}
}

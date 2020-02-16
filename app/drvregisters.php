<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Drvregisters;
class drvregisters extends Model
{
   
    protected $fillable =['name','email','contact','age','gender','licence','v_reg_no'];

    public function user(){
        return $this->belongsTo('App\User','email','email');
    }
}

<?php

namespace App;
use App\Gudregisters;
use Illuminate\Database\Eloquent\Model;

class gudregisters extends Model
{
    protected $fillable =['name','email','contact','age','gender','licence','area','price'];
 
    public function user(){
        return $this->belongsTo('App\User','email','email');
    }
}

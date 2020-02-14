<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gudregisters extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }
}

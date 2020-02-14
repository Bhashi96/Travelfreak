<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class touregister extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }
}

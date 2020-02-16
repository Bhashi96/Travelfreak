<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','user_type', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    
    public function touregister(){
        return $this->hasMany(touregister::class);
    }

    public function gudregister(){
        return $this->hasMany(gudregister::class);
    }

    public function drvregister(){
        return $this->hasMany(drvregister::class);
    }

    public function eqpregister(){
        return $this->hasMany(eqpregister::class);


    }

    
    public function drv(){
        return $this->hasOne('App\drvregisters','email','email');
    }

    public function gud(){
        return $this->hasOne('App\gudregisters','email','email');
    }


    public function threads(){

        return $this->hasmany(thread::class);
    }

}

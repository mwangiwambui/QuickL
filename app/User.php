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
        'name', 'email', 'password','users_role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function address(){
        return $this->hasMany(Address::class);
    }

    public function orders(){
        return $this->hasMany(Order::class);
    }

    public function request(){
        return $this->hasMany(RequestIndustry::class);
    }

    public function product(){
        return $this->hasMany(Product::class);
    }





}



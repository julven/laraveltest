<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
// use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class Admin extends Authenticatable

{
    
    // use AuthenticableTrait;
    use Notifiable;
    protected $table = "admins";
    protected $fillable = [ 'fname', 'lname', 'gender', 'bday', 'username', 'password', 'remember_token' ];
    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $guard = "admin";
}

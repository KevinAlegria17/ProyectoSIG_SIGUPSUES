<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

     public function rol()
    {
      return $this->belongsToMany(rol::class, 'rol_users');
        // return $this->hasOne('App\rol_user');
    }
    
    public function rol_id()
    {
        return $this->belongsTo('App\rol');
    }

    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}

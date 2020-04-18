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

    /**
     * Get the bids for the user.
     */
    public function bids()
    {
        return $this->hasMany('App\Bid');
    }

    public function reviews()
    {
        return $this->hasMany('App\Review');
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class,'users_roles');
    }
}

<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Carbon\Carbon;

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
     * 
     *
     * Magic methods
     */
    
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

    public function getFullNameAttribute()
    {
        return $this->name . ' ' . $this->lastname; 
    }

    public function getRegisterDateAttribute()
    {
        $date = new Carbon($this->created_at);

        return $date->format('d/m/Y');
    }

      /**
     * 
     *
     * Scopes
     */

    public function scopeClients($query)
    {
        return $query->where('level', 2);
    }
}

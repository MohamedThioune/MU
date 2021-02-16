<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\channel;

class User extends Authenticatable
{
    use Notifiable;

  
    protected $table = "users";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email','sex','age','photo', 'password','status','timeout','vids_post','vids_approved','subscribers','can_upload','address','country','is_valid','is_confirmed',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function profiles()
    {
        return $this->hasMany(Profile::class);
    }

    public function channels()
    {
        return $this->hasMany(Channel::class);
    }


}

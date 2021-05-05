<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Channel;
use Overtrue\LaravelLike\Traits\Liker;


class User extends Authenticatable
{
    use Notifiable, Liker;

  
    protected $table = "users";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','firstName','lastName','email','sex','age','phone','photo','password','state','type','adresse','town','postalCode','date','timeout','can_upload','country','is_valid','is_confirmed'
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

    public function suscribeChannels()
    {
        return $this->belongsToMany(Channel::class, 'abonne_channel')->withTimestamps();
    }


}

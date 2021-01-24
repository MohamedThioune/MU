<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Profile;

class Profile extends Model
{

    protected $table = "profile";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'can_stream', 'sex','age', 'user_id'
    ];


    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'can_stream' => 'string',
        'sex' => 'string',
        'age' => 'integer',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'sex' => 'required',
        'age' => 'required',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}

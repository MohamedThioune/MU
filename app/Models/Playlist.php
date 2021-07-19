<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;
use App\Models\Video;


/**
 * Class Playlist
 * @package App\Models
 * @version July 19, 2021, 12:41 pm UTC
 *
 * @property integer user_id
 * @property integer video_id
 */
class Playlist extends Model
{
    use SoftDeletes;

    public $table = 'playlists';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'video_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'video_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required',
        'video_id' => 'required'
    ];

    
}

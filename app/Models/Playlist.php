<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;
use App\Models\Video;


/**
 * Class Playlist
 * @package App\Models
 * @version April 4, 2021, 6:53 pm UTC
 *
 * @property unsignedInteger user_id
 * @property unsignedInteger video_id
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
        'id' => 'integer'
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

    public function playlisted()
    {
        return $this->belongsTo(Video::class);
    }

    public function playlist()
    {
        return $this->belongsTo(User::class);
    }

    
}

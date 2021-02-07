<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Video;
use App\User;

/**
 * Class Share
 * @package App\Models
 * @version January 31, 2021, 10:02 pm UTC
 *
 * @property string url
 * @property integer user_id
 * @property integer video_id
 */
class Share extends Model
{
    use SoftDeletes;

    public $table = 'shares';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'url',
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
        'url' => 'string',
        'user_id' => 'integer',
        'video_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'url' => 'required',
        'user_id' => 'required',
        'video_id' => 'required'
    ];

    public function video()
    {
        return $this->belongsTo(Video::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\MainTopic;
use App\Models\Read;
use App\User;
use Overtrue\LaravelLike\Traits\Likeable;


/**
 * Class Video
 * @package App\Models
 * @version January 31, 2021, 9:58 pm UTC
 *
 * @property string main_title
 * @property string title
 * @property string description
 * @property string motivation
 * @property string vid
 * @property string thumbnail
 * @property time duration
 * @property integer request_monetize
 * @property integer is_monetize
 * @property integer user_id
 * @property integer mainTopic_id
 */
class Video extends Model
{
    use SoftDeletes, Likeable;

    public $table = 'videos';
    
    protected $dates = ['deleted_at'];

    public $fillable = [
        'main_title',
        'title',
        'description',
        'motivation',
        'vid',
        'thumbnail',
        'duration',
        'request_monetize',
        'is_monetize',
        'user_id',
        'subtopic_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'main_title' => 'string',
        'title' => 'string',
        'description' => 'string',
        'motivation' => 'string',
        'vid' => 'string',
        'thumbnail' => 'string',
        'duration' => 'time',
        'online' => 'integer',
        'request_monetize' => 'integer',
        'is_monetize' => 'integer',
        'user_id' => 'integer',
        'subtopic_id' => 'integer',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        //restriction on length
        'main_title' => 'required|min:2|max:20',
        'vid' => 'required|mimes:mp4,vlc,avi,webm,flv,wmv,mov,ts,3gp,qt,ogg|max:102400',
        'thumbnail' => 'required|mimes:jpg,jpeg,png|max:2028',
        'description' => 'required',
        'subtopic_id' => 'required'
    ];

    public static $rules_updated = [
        'main_title' => 'required',
        'title' => 'required',
        'description' => 'required',
        'user_id' => 'required',
    ];
    public function mainTopic()
    {
        return $this->belongsTo(MainTopic::class);
    }

    public function read()
    {
        return $this->hasMany(Read::class);
    }

    public function unlikes()
    {
        return $this->hasMany(Unlike::class,'video_id');
    }

    public function push()
    {
        return $this->belongsTo(User::class);   
    }
}

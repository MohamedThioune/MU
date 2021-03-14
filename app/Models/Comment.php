<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Overtrue\LaravelLike\Traits\Likeable;

/**
 * Class Comment
 * @package App\Models
 * @version February 21, 2021, 10:33 pm UTC
 *
 * @property unsignedInteger user_id
 * @property unsignedInteger video_id
 * @property string value
 */
class Comment extends Model
{
    use SoftDeletes, Likeable;

    public $table = 'comments';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'video_id',
        'value'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'video_id' => 'integer',
        'value' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'video_id' => 'required',
        'value' => 'required'
    ];


    public function unlikes()
    {
        return $this->hasMany(UnlikeComment::class,'comment_id');
    }


}

<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Video;
use App\User;

/**
 * Class Report
 * @package App\Models
 * @version January 31, 2021, 10:01 pm UTC
 *
 * @property string reason
 * @property string photo
 * @property integer video_id
 */
class Report extends Model
{
    use SoftDeletes;

    public $table = 'reports';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'reason',
        'photo',
        'video_id',
        'user_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'reason' => 'string',
        'photo' => 'string',
        'video_id' => 'integer',
        'user_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'reason' => 'required',
        'photo' => 'required',
        'video_id' => 'required',
        'user_id' => 'required'
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

<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Comment
 * @package App\Models
 * @version July 17, 2021, 2:08 pm UTC
 *
 * @property integer user_id
 * @property integer video_id
 * @property string value
 */
class Comment extends Model
{
    use SoftDeletes;

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
        'user_id' => 'integer',
        'video_id' => 'integer',
        'value' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required',
        'video_id' => 'required',
        'value' => 'required'
    ];

    
}

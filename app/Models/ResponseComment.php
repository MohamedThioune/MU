<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ResponseComment
 * @package App\Models
 * @version February 23, 2021, 7:51 pm UTC
 *
 * @property string response_value
 * @property unsignedInteger comment_id
 */
class ResponseComment extends Model
{
    use SoftDeletes;

    public $table = 'response_comments';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'response_value',
        'user_id',
        'comment_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'response_value' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'response_value' => 'required',
        'comment_id' => 'required'
    ];

    
}

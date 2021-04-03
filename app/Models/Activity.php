<?php

namespace App\Models;

use Eloquent as Model;
use App\Models\Channel;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Activity
 * @package App\Models
 * @version March 22, 2021, 1:20 pm UTC
 *
 * @property string text
 */
class Activity extends Model
{
    use SoftDeletes;

    public $table = 'activities';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'text',
        'channel_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'text' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'text' => 'required',
        'channel_id' => 'required'
    ];

    public function channel()
    {
        return $this->belongsTo(Channel::class);
    }
    
}

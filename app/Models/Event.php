<?php

namespace App\Models;

use Eloquent as Model;
use App\Models\Channel;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Event
 * @package App\Models
 * @version March 22, 2021, 1:13 pm UTC
 *
 * @property string libelle
 * @property string text
 */
class Event extends Model
{
    use SoftDeletes;

    public $table = 'events';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'libelle',
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
        'libelle' => 'string',
        'text' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'libelle' => 'required',
        'text' => 'required',
        'channel_id' => 'required'
    ];

    public function channel()
    {
        return $this->belongsTo(Channel::class);
    }
}

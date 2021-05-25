<?php

namespace App\Models;

use Eloquent as Model;
use App\Models\Channel;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Contact
 * @package App\Models
 * @version March 22, 2021, 1:24 pm UTC
 *
 * @property string adresse
 * @property string site_web
 * @property string code_postale
 * @property string ville
 * @property string pays
 * @property string open_door
 */
class Contact extends Model
{
    use SoftDeletes;

    public $table = 'contacts';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'adresse',
        'site_web',
        'code_postale',
        'ville',
        'pays',
        'open_door',
        'channel_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'adresse' => 'string',
        'site_web' => 'string',
        'code_postale' => 'string',
        'ville' => 'string',
        'pays' => 'string',
        'open_door' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'adresse' => 'required',
        'pays' => 'required',
        'channel_id' => 'required'   
    ];

    public function channel()
    {
        return $this->belongsTo(Channel::class);
    }
}

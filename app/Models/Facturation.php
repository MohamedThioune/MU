<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Facturation
 * @package App\Models
 * @version April 12, 2021, 1:30 pm UTC
 *
 * @property integer month
 * @property integer state
 * @property unsignedInteger user_id
 */
class Facturation extends Model
{
    use SoftDeletes;

    public $table = 'facturations';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'type',
        'amount',
        'end_at',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'user_id' => 'integer',
        'type' => 'string',
        'amount' => 'integer',
        'end_at'=> 'date',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required',
        'type' => 'required',
        'amount' => 'required',
        'end_at'=> 'required',
    ];

    
}

<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Subtopic
 * @package App\Models
 * @version July 13, 2021, 1:05 am UTC
 *
 * @property string libelle
 * @property unsignedInteger mainTopic_id
 */
class Subtopic extends Model
{
    
    public $table = 'sub_topics';
    

    public $fillable = [
        'libelle',
        'mainTopic_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'libelle' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'libelle' => 'required',
        'mainTopic_id' => 'required'
    ];

    
}

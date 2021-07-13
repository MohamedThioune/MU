<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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
    use SoftDeletes;

    public $table = 'subtopics';
    

    protected $dates = ['deleted_at'];



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

<?php

namespace App\Models;

use Eloquent as Model;
use App\Models\MainTopic;

/**
 * Class SubTopic
 * @package App\Models
 * @version January 31, 2021, 9:51 pm UTC
 *
 * @property string libelle
 */
class SubTopic extends Model
{

    public $table = 'sub_topics';
   
    public $fillable = [
        'libelle',
        'mainTopic_id',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'libelle' => 'string',
        'mainTopic_id' => 'integer',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'libelle' => 'required',
        'mainTopic_id' => 'required',
    ];

    public function mainTopic()
    {
        return $this->belongsTo(MainTopic::class);
    }

    
}

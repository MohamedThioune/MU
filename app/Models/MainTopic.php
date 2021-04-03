<?php

namespace App\Models;

use Eloquent as Model;
use App\Models\SubTopic;

/**
 * Class MainTopic
 * @package App\Models
 * @version January 31, 2021, 9:52 pm UTC
 *
 * @property string libelle
 * @property integer subTopic_id
 */
class MainTopic extends Model
{
    public $table = 'main_topics';

    public $fillable = [
        'libelle',
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
        'libelle' => 'required'
    ];

    public function subTopic()
    {
        return $this->belongsTo(SubTopic::class);
    }

}

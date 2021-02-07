<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
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
    use SoftDeletes;

    public $table = 'sub_topics';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'libelle'
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

    public function mainTopic()
    {
        return $this->belongsTo(MainTopic::class);
    }

    
}

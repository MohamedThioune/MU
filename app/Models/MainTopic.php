<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
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
    use SoftDeletes;

    public $table = 'main_topics';
    

    protected $dates = ['deleted_at'];
    

    public $fillable = [
        'libelle',
        'subTopic_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'libelle' => 'string',
        'subTopic_id' => 'integer'
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

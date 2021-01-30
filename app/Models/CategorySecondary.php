<?php

namespace App\Models;

use Eloquent as Model;
use Channel;

/**
 * Class CategorySecondary
 * @package App\Models
 * @version January 25, 2021, 10:44 pm UTC
 *
 * @property string libelle
 */
class CategorySecondary extends Model
{

    public $table = 'category_secondaries';
    
    public $fillable = [
        'libelle','user_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'libelle' => 'string',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'libelle' => 'required',
    ];

    public function channels()
    {
        return $this->hasMany(Channel::class);
    }
}

<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Channel;

/**
 * Class CategoryPrimary
 * @package App\Models
 * @version January 25, 2021, 10:45 pm UTC
 *
 * @property string libelle
 */
class CategoryPrimary extends Model
{

    public $table = 'category_primaries';

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

    public function channels()
    {
        return $this->hasMany(Channel::class);
    }
    
}

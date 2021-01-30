<?php

namespace App\Models;

use Eloquent as Model;
use App\User;
use App\Models\CategoryPrimary;
use App\Models\CategorySecondary;

/**
 * Class channel
 * @package App\Models
 * @version January 25, 2021, 8:25 pm UTC
 *
 * @property \App\Models\User user
 * @property string name
 * @property string description
 * @property string urlPhoto
 * @property integer user_id
 */
class Channel extends Model
{

    public $table = 'channels';

    public $fillable = [
        'name',
        'description',
        'urlPhoto',
        'user_id',
        'categoryprimary_id',
        'categorysecondary_id',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'description' => 'string',
        'urlPhoto' => 'string',
        'user_id' => 'integer',
        'categoryprimary_id' => 'integer',
        'categorysecondary_id' => 'integer',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'user_id' => 'required',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category_primary()
    {
        return $this->belongsTo(User::class);
    }

    public function category_secondary()
    {
        return $this->belongsTo(User::class);
    }
}

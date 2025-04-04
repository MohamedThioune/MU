<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Video;
use App\User;
use App\Models\Profile;

/**
 * Class Read
 * @package App\Models
 * @version January 31, 2021, 10:18 pm UTC
 *
 * @property time time_read
 * @property unsignedInteger video_id
 * @property unsignedInteger user_id
 */
class Read extends Model
{
    use SoftDeletes;

    public $table = 'reads';
    

    protected $dates = ['deleted_at'];

    
    public $fillable = [
        'video_id',
        'user_id',
        'profile_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer'
    ];

    public function video()
    {
        return $this->belongsTo(Video::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
    
}

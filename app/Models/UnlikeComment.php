<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UnlikeComment extends Model
{

    public $table = 'unlike_comments';

    public $fillable = [
        'user_id',
        'comment_id',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Like extends Model
{
    use SoftDeletes;
      protected $dates = ['deleted_at'];
      public $table = 'likes';
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Points extends Model
{
    protected $fillable=[
        'user_id','scorepoints',
    ];
}

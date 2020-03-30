<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable=['title','summary','category','points','imageUrl'];
}

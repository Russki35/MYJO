<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Journalist extends Model
{
    protected $fillable = ['location', 'price', 'picture', 'user_id'];
}

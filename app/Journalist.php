<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Journalist extends Model
{
    protected $fillable = ['firstname', 'lastname','profile_title', 'description', 'location', 'price', 'picture', 'user_id'];
}

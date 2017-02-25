<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experiences extends Model
{
    protected $fillable = ['title', 'resume', 'role', 'start_date', 'end_date', 'user_id'];
}

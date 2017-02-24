<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formations extends Model
{
    protected $fillable = ['organisation', 'certificate', 'acquired', 'obtention_date', 'user_id'];

}

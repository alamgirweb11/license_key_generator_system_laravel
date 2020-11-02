<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class License extends Model
{
   protected $fillable = ['client_id','license_key','expire_date'];
   // protected $dates = ['expire_date'];
}

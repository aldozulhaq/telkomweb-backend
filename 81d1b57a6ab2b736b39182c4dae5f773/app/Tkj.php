<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tkj extends Model
{
    protected $table = 'tkj';

    protected $fillable = ['id','post_tkj','date_tkj','flag_tkj','user','role'];

}

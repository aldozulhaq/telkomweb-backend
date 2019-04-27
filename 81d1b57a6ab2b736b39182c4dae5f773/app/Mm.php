<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mm extends Model
{
    protected $table = 'mm';

    protected $fillable = ['id','post_mm','date_mm','flag_mm','user','role'];

}

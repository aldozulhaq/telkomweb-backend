<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Osis extends Model
{
    protected $table = 'osis';

    protected $fillable = ['id','post_osis','date_osis','flag_osis','user','role'];

}

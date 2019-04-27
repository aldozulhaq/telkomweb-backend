<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rpl extends Model
{
    protected $table = 'rpl';

    protected $fillable = ['id','post_rpl','date_rpl','flag_rpl','user','role'];

}

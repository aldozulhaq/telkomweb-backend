<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visim extends Model
{
    protected $table = 'visim';

    protected $fillable = ['id','post_visim','date_visim','flag_visim', 'user', 'role'];

}

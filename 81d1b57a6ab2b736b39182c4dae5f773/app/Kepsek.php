<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kepsek extends Model
{
    protected $table = 'kepsek';

    protected $fillable = ['id_kep_post','post_kepsek','date_kepsek','flag_kepsek'];

}

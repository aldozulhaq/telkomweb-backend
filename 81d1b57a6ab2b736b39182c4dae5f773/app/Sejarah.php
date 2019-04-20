<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sejarah extends Model
{
    protected $table = 'sejarah';

    protected $fillable = ['id_sej_post','post_sejarah','date_sejarah','flag_sejarah'];

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    protected $table = 'fasilitas';

    protected $fillable = ['id_fas_post','post_fasilitas','date_fasilitas','flag_fasilitas'];

}

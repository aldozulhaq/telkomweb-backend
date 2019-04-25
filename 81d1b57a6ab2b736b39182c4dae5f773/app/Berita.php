<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = 'berita';

    protected $fillable = ['id','judul_artikel','post_artikel','id_gam_post','date_artikel','flag_artikel','user','role'];

}

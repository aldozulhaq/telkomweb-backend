<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    protected $table = 'profil';

    protected $fillable = ['id_sejarah','id_visi','id_kepsek','id_fasilitas'];

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visim extends Model
{
    protected $table = 'sejarah';

    protected $fillable = ['id_vis_post','post_visim','date_visim','flag_visim'];

}

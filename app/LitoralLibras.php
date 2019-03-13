<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LitoralLibras extends Model
{
    protected $table = 'litoral_libras';

    protected $fillable = ['titulo','texto', 'titulo_youtube_id'];

     public $timestamps = false;
}

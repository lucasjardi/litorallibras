<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuemSomos extends Model
{
    protected $table = 'quemsomos';

    protected $fillable = ['titulo','texto', 'titulo_youtube_id'];

    public $timestamps = false;
}

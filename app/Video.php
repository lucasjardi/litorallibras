<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = [
    	'glossario_id',
    	'youtube_id',
    	// 'thumbnail',
    	// 'video',
    	'descricao'
    ];




    public function glossario()
    {
    	return $this->belongsTo('App\Glossario');
    }
}

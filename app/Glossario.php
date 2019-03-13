<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Glossario extends Model
{
    protected $table = 'glossario';

    protected $fillable = [
    	'categoria',
    	'descricao'
    ];


    public function videos()
    {
    	return $this->hasMany('App\Video');
    }
}

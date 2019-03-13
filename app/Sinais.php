<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sinais extends Model
{
    protected $table = 'sinais_users';

    protected $fillable = ['user_id','descricao', 'path'];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}

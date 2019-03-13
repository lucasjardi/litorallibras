<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $table = 'materialteorico';

    protected $fillable = ['titulo','texto'];
}

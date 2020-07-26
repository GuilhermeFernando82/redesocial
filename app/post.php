<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $table = "postagens";
    protected $fillable = [
        'user_id',
        'nome_user',
        'titulo',
        'publications',
        'picture',
    ];
}

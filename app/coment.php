<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class coment extends Model
{
    protected $table = "coment";
    protected $fillable = [
        'user_id',
        'nome_user',
        'coment',
        'picture',
    ];
}

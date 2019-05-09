<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parametro extends Model
{
    protected $primaryKey = 'user_id';

     protected $fillable = [
        'user_id',
        'mil_pontos',
            'entretela',
            'tnt',
            'linha_sup',
            'linha_bob',
            'pontos_min',
            'lucro',

    ];
}

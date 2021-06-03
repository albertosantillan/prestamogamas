<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plano extends Model
{  

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_operacion',
        'No_hoja',
        'ptosInsp',
        'comparacion',
        'cumple',
        'fechaAlta'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        '',
    ];
}

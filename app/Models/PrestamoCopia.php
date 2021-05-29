<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PrestamoCopia extends Model
{  

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_area','id_maquina','id_personal','id_plano','ot','fechaTentDev','fechaDev','devuelto'
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

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{  

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_area',
        'id_maquina',
        'id_personal',
        'id_operacion',
        'ot',
        'fechaTentDev',
        'fechaDev',
        'devuelto',
        'devolucionOk',
        'user_id'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        '',
    ];

    public function area()
    {
        return $this->hasOne(Area::Class,'id','id_area');
    }

    public function maquina()
    {
        return $this->hasOne(Maquina::Class,'id','id_maquina');
    }
}

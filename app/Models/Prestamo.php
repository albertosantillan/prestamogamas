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
        'id_empleado',
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
    public function empleado()
    {
        return $this->hasOne(Empleado::Class,'id','id_empleado');
    }
    public function operacion()
    {
        return $this->hasOne(Operacion::Class,'id','id_operacion');
    }
    public function user()
    {
        return $this->hasOne(User::Class,'id','user_id');
    }

    // Scopes

    public function scopeDevueltos($query, $request)
    {

        if($request->has('isDevueltos')) {
            return $query->where('devuelto');
        }

        return $request;
    }
}

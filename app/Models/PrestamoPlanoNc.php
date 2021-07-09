<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PrestamoPlanoNC extends Model
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
        'id_pieza',
        'ot',
        'fechaTentDev',
        'fechaDev',
        'devuelto',
        'obs'
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
    public function pieza()
    {
        return $this->hasOne(Pieza::Class,'id','id_pieza');
    }
    public function scopeDevueltos($query, $request)
    {
        if($request->>has('isDevueltos')){
            return $query->where('devuelto');
        }
        return $query;
    }

}

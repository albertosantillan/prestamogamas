<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Operacion extends Model
{  

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_pieza',
        'No_operacion', 
        'descripcion_op',
        'codigo',
        'revision',
        'actualizado',
        'solid',
        'legible',
        'agrupado',
        'codBarras',
        'dobleCarta'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        '',
    ];

    public function pieza()
    {
        return $this->hasOne(Pieza::Class,'id','id_pieza');
    }
    public function scopePieza($query, $request)
    {
        if($request->has('pieza')){
            $query->where('id_pieza','like','%'.$request->input('pieza').'%');
        }
        return $query;
    }
}

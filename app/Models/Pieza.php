<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pieza extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 
        'user_id', 
        'SKU', 
        'codigo_pieza', 
        'descripcion_pieza', 
        'alta', 
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        '',
    ];

    // Relationships

    public function user()
    {
       return $this->hasOne(user::Class,'id','user_id'); 
    }

    // Scopes

    public function scopeFilter($query, $request)
    {
        if($request->has('cp')) {
            $query->where('codigo_pieza', 'like', '%'.$request->input('cp').'%');
        }

        if($request->has('descripcion')) {
            $query->where('descripcion_pieza', 'like', '%'.$request->input('descripcion').'%');
        }

        if($request->has('fecha_inic')){
            $query->whereDate('created_at', '>=', $request->input('fecha_inic'));
        }
        if($request->has('fecha_fin')){
            $query->whereDate('created_at', '<=', $request->input('fecha_fin'));
        }

        return $query;
    }
}

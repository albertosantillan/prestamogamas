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
        'id_perforadora', 
        'user_id', 
        'SKU', 
        'codigo_pieza', 
        'descripcion_pieza', 
        'alta', 
        'revision'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        '',
    ];
    public function user()
    {
       return $this->hasOne(user::Class,'id','user_id'); 
    }
}

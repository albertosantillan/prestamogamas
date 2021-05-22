<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class personal extends Model
{  

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nomina','nombre'
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

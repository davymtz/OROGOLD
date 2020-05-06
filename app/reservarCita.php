<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reservarCita extends Model
{
    protected $table = 'reservar_cita';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email','fecha','nombre','telefono'
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];
}

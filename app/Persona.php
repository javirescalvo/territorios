<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $fillable = [
        'nombre','telefono1','telefono2','email'
    ];

    public function territorio(){
        return $this->hasMany(Territorio::class);
    }

    public function poblacion(){
        return $this->belongsTo(Poblacion::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poblacion extends Model
{
    protected $fillable = ['nombre','codigo'];

    public function territorios(){
        return $this->hasMany(Territorio::class);
    }

    public function personas(){
        return $this->hasMany(Persona::class);
    }
}

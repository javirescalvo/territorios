<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Territorio extends Model
{
    protected $fillable = [
      'nombre','codigo','referencia'
    ];

    public function persona(){
        return $this->belongsTo(Persona::class);
    }

    public function poblacion(){
        return $this->belongsTo(Poblacion::class);
    }
}

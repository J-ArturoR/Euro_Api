<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prioridad extends Model
{
    use HasFactory;
    protected $fillable=[
        'nombre_prioridad',
    ];
    public function circuito(){
        return $this->hasMany(Circuito::class,'id');
    }

    public function flyer(){
        return $this->belongTo(Flyer::class,'id');
    }

    public function paquete(){
        return $this->hasMany(Paquete::class,'id');
    }
    public function protocolo(){
        return $this->hasMany(Protocolo::class,'id');
    }
    public function slider(){
        return $this->hasMany(Slider::class,'id');
    }
}

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
        return $this->belongTo(Circuito::class, 'circuito_id','id');
    }

    public function flyer(){
        return $this->belongTo(Flyer::class, 'prioridad_id','id');
    }

    public function paquete(){
        return $this->belongsTo(Paquete::class,'prioridad_id');
    }
    public function protocolo(){
        return $this->belongsTo(Protocolo::class,'prioridad_id');
    }
    public function slider(){
        return $this->hasMany(Slider::class,'id');
    }
}

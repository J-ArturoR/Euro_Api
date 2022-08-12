<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;
    protected $fillable=['name_status'];

   public function catalogo(){
        return $this->hasMany(Catalogo::class,'id');
    }
    public function circuito(){
        return $this->hasMany(Circuito::class,'id');
    }

    public function contacto(){
        return $this->hasMany(Contacto::class,'id');
    }

    public function destino(){
        return $this->hasMany(Destino::class,'id');
    }

    public function flyer(){
        return $this->hasMany(Flyer::class,'id');
    }
    public function itinerariocir(){
        return $this->hasMany(ItinerarioCircuito::class, 'id');
    }
    public function itinerariodes(){
        return $this->hasMany(ItinerarioDestino::class, 'id');
    }

    public function paquetes(){
        return $this->hasMany(Paquete::class, 'id');
    }
    public function protocolo(){
        return $this->hasMany(Protocolo::class,'id');
    }

    public function slider(){
        return $this->hasMany(Slider::class,'id');
    }

    public function txtslider(){
        return $this->hasMany(TextoSlider::class,'id');
    }
    
}

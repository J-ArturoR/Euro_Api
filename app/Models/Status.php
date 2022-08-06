<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;
    protected $fillable=['name_status'];

   public function catalogo(){
        return $this->belongTo(Catalogo::class, 'status_id','id');
    }
    public function circuito(){
        return $this->belongTo(Circuito::class, 'circuito_id','id');
    }

    public function contacto(){
        return $this->belongTo(Contacto::class, 'status_id','id');
    }

    public function destino(){
        return $this->belongTo(Destino::class, 'status_id','id');
    }

    public function flyer(){
        return $this->hasMany(Flyer::class);
    }
    public function itinerariocir(){
        return $this->belongTo(ItinerarioCircuito::class, 'status_id','id');
    }
    public function itinerariodes(){
        return $this->belongTo(ItinerarioDestino::class, 'status_id','id');
    }

    public function paquetes(){
        return $this->belongTo(Paquete::class, 'status_id');
    }
    public function protocolo(){
        return $this->belongTo(Protocolo::class,'status_id');
    }

    public function slider(){
        return $this->hasMany(Protocolo::class,'id');
    }

    public function txtslider(){
        return $this->hasMany(TextoSlider::class,'id');
    }
    
}

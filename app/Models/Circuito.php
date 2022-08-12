<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use ItinerarioCircuito;
class Circuito extends Model
{
    use HasFactory;
    protected $fillable=[
        'titulo_circuito',
        'tipo_id',
        'duracion',
        'fecha_inicio',
        'fecha_fin',
        'ruta',
        'salida',
        'descripcion',
        'precio',
        'denomicacinon',
        'img_portada',
        'img_mapa',
        'pdf',
        
        'vuelo',
        'traslados',
        'alojamiento',
        'maleta',
        'impuesto',

        'pdf_condiciones',
        'iconografia_id',
        'flyer_id',
        'catalogo_id',
        'tag',
        'prioridad_id',
        'itinerario_id',
        'status_id',
        'categoria_id',
    ];

    //tipo_id
    public function tipo(){
        return $this->belongsTo(Tipo_Producto::class,'tipo_id');
    }

    //flyer_id
    public function flyer(){
        return $this->belongsTo(Flyer::class,'flyer_id');
    }

    //catalogo_id
    public function catalogo(){
        return $this->belongsTo(Catalogo::class,'catalogo_id');
    }

    //prioridad_id
    public function prioridad(){
        return $this->belongsTo(Prioridad::class,'prioridad_id');
    }

    //itinerario_id

    //status_id
    public function status(){
        return $this->belongsTo(Status::class,'status_id');
    }
    //categoria_id
    public function categoria(){
        return $this->belongsTo(Categoria::class,'categoria_id');
    }

    
    public function itinerarios(){
        return $this->hasMany(ItinerarioCircuito::class);
    }

    public function itinerario(){
        return $this->hasMany(ItinerarioCircuito::class);
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destino extends Model
{
    use HasFactory;
    protected $faillable=[
        'nombre_destino',
        //'img_id',
        'desc_corta',
        'desc_larga',
        'duracion',
        'costo',
        'vuelo',
        'traslados',
        'alojamiento',
        'maleta',
        'impuesto',
        'status_id',
        'categoria_id',

    ];

    public function status(){
        return $this->belongsTo(Status::class,'staus_id');
    }

    public function categoria(){
        return $this->belongsTo(Categoria::class,'categoria_id');
    }

    public function itinerarios(){
        return $this->hasMany(ItinerarioDestino::class);
    }

    

}

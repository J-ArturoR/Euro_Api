<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paquete extends Model
{
    use HasFactory;
    protected $fillable=[
        'imagen_portada',
        'pagado',
        'prioridad_id',
        'titulo_paquete',
        'apertura',
        'fin',
        'status_id',
        'tipo_id',
        'vuelo',
        'traslado',
        'alojamiento',
        'asistencia',
        'seguro',
        'impuesto',
        'otros',
        'descripcion',
        
    ];

    public function prioridad(){
        return $this->belongsTo(Prioridad::class,'prioridad_id');
    }

    public function status(){
        return $this->belongsTo(Status::class,'status');
    }

    public function tipo(){
        return $this->belongsTo(Tipo_Producto::class,'tipo_id');
    }

}

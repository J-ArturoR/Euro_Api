<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flyer extends Model
{
    
    use HasFactory;
    protected $fillable=[
        'imagen_portada',
        'titulo_flyer',
        'status_id',
        'personalizable',
        'fecha_apertura',
        'fecha_vigencia',
        'prioridad_id',
       //'paquete_id',
        'salidas',
    ];

    public function circuito(){
        return $this->belongsTo(Circuito::class,'id');
    }
    public function status(){
        return $this->belongsto(Status::class,'status_id');
    }

    public function prioridad(){
        return $this->belongsTo(Prioridad::class, 'prioridad_id');
    }

}

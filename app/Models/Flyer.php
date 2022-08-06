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
       // 'paquete_id',
        'salidas',
    ];

    public function circuito(){
        return $this->belongTo(Circuito::class, 'circuito_id','id');
    }
    public function status(){
        return $this->belongsto(Status::class);
    }

    public function prioridad(){
        return $this->belongTo(Prioridad::class, 'prioridad_id','id');
    }

}

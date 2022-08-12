<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Protocolo extends Model
{
    use HasFactory;
    protected $fillable=[
        'nombre_protocolo',
        'img',
        'archivo',
        'status_id',
        'tags',
        'prioridad_id',
        'tipo_protocoloid',
    ];

    public function status(){
        return $this->belongsTo(Status::class,'status_id');
    }
    public function prioridad(){
        return $this->belongsTo(Prioridad::class,'prioridad_id');
    }
    public function tipo(){
        return $this->belongsTo(TipoProtocolo::class,'tipo_protocoloid');
    }


}

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
        return $this->hasMany(Status::class,'id');
    }
    public function prioridad(){
        return $this->hasMany(Prioridad::class,'id');
    }
    public function tipo(){
        return $this->hasMany(TipoProtocolo::class,'id');
    }


}

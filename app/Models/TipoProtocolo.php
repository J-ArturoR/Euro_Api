<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoProtocolo extends Model
{
    use HasFactory;
    protected $fillable=[
        'tipo_protocolo',
        'descripcion',
    ];
    public function protocolo() {
        return $this->hasMany(Protocolo::class,'id');
    }
}

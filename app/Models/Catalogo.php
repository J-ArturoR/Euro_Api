<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalogo extends Model
{
    use HasFactory;
    protected $fillable=[
        'nombre_catalogo',
        'img_portada',
        'archivo',
        'status_id',
    ];

    public function status(){
        return $this->hasMany(Status::class,'id');
    }

    public function circuito(){
        return $this->belongTo(Circuito::class, 'circuito_id','id');
    }


}

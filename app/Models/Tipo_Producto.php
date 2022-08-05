<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_Producto extends Model
{
    use HasFactory;
    protected $fillable=[
        'nombre_producto',
        'descripcion',
    ];

    public function circuito(){
        return $this->belongTo(Circuito::class, 'circuito_id');
    }

    public function paquete(){
        return $this->belongTo(Paquete::class,'tipo_id');
    }

    

}

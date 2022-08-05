<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $fillable=['nombre_categoria'];
    
    public function circuito(){
        return $this->belongTo(Circuito::class, 'circuito_id','id');
    }
    public function destino(){
        return $this->belongTo(Destino::class, 'destino_id','id');
    }

}

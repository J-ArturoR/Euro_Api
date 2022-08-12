<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $fillable=['nombre_categoria'];
    
    public function circuito(){
        return $this->hasMany(Circuito::class,'id');
    }
    public function destino(){
        return $this->hasMany(Destino::class, 'id');
    }

}

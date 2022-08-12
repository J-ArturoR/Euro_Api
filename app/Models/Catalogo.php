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
        return $this->belongsTo(Status::class,'status_id');
    }

    public function circuito(){
        return $this->hasMany(Circuito::class,'id');
    }


}

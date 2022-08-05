<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    use HasFactory;
    protected $fillable=[
        'nombre_contacto',
        'direccion',
        'cargo',
        'email',
        'telefono',
        'status_id',
    ];

    public function status(){
        return $this->hasMany(Status::class,'id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iconografia extends Model
{
    use HasFactory;
    protected $fillable=[
        'nombre_icono',
        'url',
    ];
}

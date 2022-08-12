<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Circuito;
class ItinerarioCircuito extends Model
{
    use HasFactory;
    protected $fillable=[
        'dia',
        'lugar',
        'actividad',
        'status_id',
        'circuito_id',
    ];
    public function status(){
        return $this->belongsTo(Status::class,'status_id');
    }

    public function circuito()
    {
        return $this->belongsTo(Circuito::class);
    }
 
}


<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItinerarioDestino extends Model
{
    use HasFactory;
    protected $fillable=[
        'dia',
        'lugar',
        'actividad',
        'status_id',
        'destino_id',
    ];
    
    public function status(){
        return $this->hasMany(Status::class,'id');
    }
    public function destino(){
        return $this->belongsTo(Destino::class);
    }
}

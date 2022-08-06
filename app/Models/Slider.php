<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    protected $fillable=[
        'nombe_slider',
        'img_pc',
        'img_movil',
        'ceo',
        'vigencia',
        'prioridad',
        'link',
        'status_id',
        'prioridad_id'
    ];

    public function status(){
        return $this->belongsTo(Status::class,'status_id');
    }

    public function prioridad(){
        return $this->belongsTo(Prioridad::Class,'prioridad_id');
    }
    
}

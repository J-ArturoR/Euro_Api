<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImgDestino extends Model
{
    use HasFactory;
    protected $fillable=[
        'img_Dest',
        'img',
        'destino_id',
        'ceo',
    ];
}

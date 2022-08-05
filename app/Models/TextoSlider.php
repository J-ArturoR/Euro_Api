<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TextoSlider extends Model
{
    use HasFactory;
    protected $fillable=[
        'texto',
        'status_id',
    ];
}

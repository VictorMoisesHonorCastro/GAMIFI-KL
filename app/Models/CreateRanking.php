<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreateRanking extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable = [
        'codigo',
        'nombre',
        'id_profesor'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Zona extends Model
{
    protected $fillable = [
        'zona',
        'descripcion',
        'departamento_id',
        'municipio_id',
    ];
}

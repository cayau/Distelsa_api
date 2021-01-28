<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $fillable = [
        'municipio',
        'departa,nto_id',
        'status',
        'available',
    ];
}

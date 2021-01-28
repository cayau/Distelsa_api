<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\Municipio;
use App\Models\Zona;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    public function index()
    {
        return Departamento::all();
    }
}

<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cargos;

class CargosController extends Controller
{
    public function index()
    {
        return Cargos::all();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class marcasController extends Controller
{
    //
    public function index()
    {
        return response()->json(marcas::all());
    }
}

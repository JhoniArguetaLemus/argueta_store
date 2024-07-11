<?php

namespace App\Http\Controllers;
use App\Models\productos;

use Illuminate\Http\Request;

class Tienda_controller extends Controller
{

    public function inicio(){
        return view("inicio");
    }
    public function ver_productos(){
        $productos=productos::all();

        return view('ver_productos', compact('productos'));

    }
}

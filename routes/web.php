<?php

use App\Http\Controllers\Tienda_controller;

use Illuminate\Support\Facades\Route;

Route::get('/inicio', [Tienda_controller::class, 'inicio'])->name('inicio');



Route::get('home/ver_productos', [Tienda_controller::class, 'ver_productos'])->name('tienda.productos');

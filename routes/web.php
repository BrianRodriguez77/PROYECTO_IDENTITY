<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/prueba', function () {
    return '¡Ruta de prueba funcionando!';
});

use App\Http\Controllers\AlumnoController;

Route::get('/alumnos', [AlumnoController::class, 'index'])->name('alumnos.index');

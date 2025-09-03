<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    // Metodo para listar alumnos
    public function index()
    {
        //Aqui se podran traer datos desde la DB más adelante
        $alumnos = [
            ['id' => 1, 'nombre' => 'Juan Perez'],
            ['id' => 2, 'nombre' => 'Ana Lopez'],
            ['id' => 3, 'nombre' => 'Carlos Garcia'],

        ];

        //Pasamos los datos a la vista
        return view('alumnos.index', compact('alumnos'));
    }
}

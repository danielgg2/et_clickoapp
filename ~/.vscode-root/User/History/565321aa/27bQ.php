<?php

namespace App\Http\Controllers;

use App\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    public function index()
    {
        $estudiantes = Estudiante::all();
        return view('estudiantes.index', compact('estudiantes'));
    }

    public function create()
    {
        return view('estudiantes.create');
    }

    public function store(Request $request)
    {
        $estudiante = Estudiante::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'email' => $request->email,
            // Otros campos del modelo Estudiante
        ]);
    
        // Puedes agregar código para relacionar el estudiante con cursos aquí
    
        return redirect()->route('estudiantes.index');
    }

    public function show(Estudiante $estudiante)
    {
        return view('estudiantes.show', compact('estudiante'));
    }

    public function edit(Estudiante $estudiante)
    {
        return view('estudiantes.edit', compact('estudiante'));
    }

    public function update(Request $request, Estudiante $estudiante)
    {
        $estudiante->update([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'email' => $request->email,
            // Actualiza otros campos del modelo Estudiante
        ]);
    
        // Puedes agregar código para actualizar las relaciones con cursos aquí
    
        return redirect()->route('estudiantes.index');
    }

    public function destroy(Estudiante $estudiante)
    {
        // Puedes agregar código para eliminar relaciones antes de eliminar al estudiante
        $estudiante->cursos()->detach();

        $estudiante->delete();

        return redirect()->route('estudiantes.index');
    }
}


<?php

namespace App\Http\Controllers;

use App\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::all();
        return view('cursos.index', compact('cursos'));
    }

    public function create()
    {
        return view('cursos.create');
    }

    public function store(Request $request)
    {
        $curso = Curso::create([
            'nombre' => $request->nombre,
            // Otros campos del modelo Curso
        ]);
    
        // Puedes agregar código para relacionar el curso con estudiantes y categorías aquí
    
        return redirect()->route('cursos.index');
    }

    public function show(Curso $curso)
    {
        return view('cursos.show', compact('curso'));
    }

    public function edit(Curso $curso)
    {
        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, Curso $curso)
    {
        // Lógica para actualizar un curso existente
    }

    public function destroy(Curso $curso)
    {
        // Lógica para eliminar un curso
    }
}


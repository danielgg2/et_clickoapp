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
        $curso->update([
            'nombre' => $request->nombre,
            // Actualiza otros campos del modelo Curso
        ]);
    
        // Puedes agregar código para actualizar las relaciones con estudiantes y categorías aquí
    
        return redirect()->route('cursos.index');
    }

    public function destroy(Curso $curso)
    {
        // Puedes agregar código para eliminar relaciones antes de eliminar el curso
        $curso->estudiantes()->detach();
        $curso->categorias()->detach();

        $curso->delete();

        return redirect()->route('cursos.index');
    }

    public function agregarEstudiante($cursoId, $estudianteId)
    {
        $curso = Curso::find($cursoId);
        $estudiante = Estudiante::find($estudianteId);

        if (!$curso || !$estudiante) {
            // Manejar el caso en el que no se encuentren el curso o el estudiante
        }

        $curso->estudiantes()->attach($estudiante->id);

        return redirect()->route('cursos.show', ['curso' => $cursoId]);
    }
}


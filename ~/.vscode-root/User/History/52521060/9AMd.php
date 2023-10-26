<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EstudianteCursoTest extends TestCase
{
    use RefreshDatabase;

    public function testEstudiantePuedeAsistirACurso()
    {
        $curso = Curso::create([
            'nombre' => 'Historia',
            'descripcion' => 'Curso de historia mundial',
        ]);

        $estudiante = Estudiante::create([
            'nombre' => 'Ana',
            'apellido' => 'Gómez',
            'email' => 'ana@example.com',
        ]);

        $estudiante->cursos()->attach($curso);

        $this->assertTrue($estudiante->cursos->contains('nombre', 'Historia'));
    }
}

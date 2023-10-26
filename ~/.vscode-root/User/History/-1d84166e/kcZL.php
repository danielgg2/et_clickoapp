<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Curso;

class CursoTest extends TestCase
{
    use RefreshDatabase;

    public function testCrearCurso()
    {
        $curso = Curso::store([
            'nombre' => 'Matemáticas',
            'descripcion' => 'Curso de matemáticas avanzadas',
        ]);

        $this->assertDatabaseHas('cursos', ['nombre' => 'Matemáticas']);
    }
}

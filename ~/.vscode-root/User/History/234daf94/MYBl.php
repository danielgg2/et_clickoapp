<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EstudianteTest extends TestCase
{
    use RefreshDatabase;

    public function testCrearEstudiante()
    {
        $estudiante = Estudiante::create([
            'nombre' => 'Juan',
            'apellido' => 'Pérez',
            'email' => 'juan@example.com',
        ]);

        $this->assertDatabaseHas('estudiantes', ['nombre' => 'Juan']);
    }
}

<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Curso;
use App\Models\Categoria;

class CursoCategoriaTest extends TestCase
{
    use RefreshDatabase;

    public function testAgregarCategoriaACurso()
    {
        $curso = Curso::create([
            'nombre' => 'Matemáticas',
            'descripcion' => 'Curso de matemáticas avanzadas',
        ]);

        $categoria = Categoria::create([
            'nombre' => 'Álgebra',
            'descripcion' => 'Categoría de álgebra',
        ]);

        $curso->categorias()->attach($categoria);

        $this->assertTrue($curso->categorias->contains('nombre', 'Álgebra'));
    }
}

<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Curso;
use App\Models\Documento;

class CursoDocumentoTest extends TestCase
{
    use RefreshDatabase;

    public function testAgregarDocumentoACurso()
    {
        $curso = Curso::create([
            'nombre' => 'Historia',
            'descripcion' => 'Curso de historia mundial',
        ]);

        $documento = Documento::create([
            'nombre' => 'Documento de Historia',
            'curso_id' => $curso->id,
        ]);

        $this->assertDatabaseHas('documentos', ['nombre' => 'Documento de Historia']);
    }
}

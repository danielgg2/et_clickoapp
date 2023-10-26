<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentoController extends Controller
{
    public function store(Request $request)
    {
        $archivo = $request->file('archivo');
        $nombreArchivo = $archivo->getClientOriginalName();
        $archivo->storeAs('documentos', $nombreArchivo); // Esto almacenará el archivo en la carpeta 'storage/app/documentos'
        
        Documento::create([
            'nombre' => $nombreArchivo,
            'curso_id' => $request->curso_id,
        ]);

        return redirect()->route('documento.index');
    }

}

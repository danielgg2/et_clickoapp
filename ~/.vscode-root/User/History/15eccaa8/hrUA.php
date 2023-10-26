<?php

namespace App\Http\Controllers;

use App\Documento;
use Illuminate\Http\Request;

class DocumentoController extends Controller
{
    public function index()
    {
        $documentos = Documento::all();
        return view('documentos.index', compact('documentos'));
    }

    public function create()
    {
        return view('documentos.create');
    }

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

    public function show(Documento $documento)
    {
        return view('documentos.show', compact('documento'));
    }

    public function edit(Documento $documento)
    {
        return view('documentos.edit', compact('documento'));
    }

    public function update(Request $request, Documento $documento)
    {
        // Lógica para actualizar un documento existente
    }

    public function destroy(Documento $documento)
    {
        // Elimina el archivo del servidor
        Storage::delete('documentos/' . $documento->nombre);

        $documento->delete();

        return redirect()->route('documentos.index');
    }

}

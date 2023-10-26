<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    public function documentos()
    {
        return $this->hasMany(Documento::class);
    }

    public function estudiantes()
    {
        return $this->belongsToMany(Estudiante::class);
    }

    public function categorias()
    {
        return $this->belongsToMany(Categoria::class);
    }

}

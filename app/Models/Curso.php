<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'descripcion', 'fecha_inicio', 'fecha_fin'];

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
        return $this->belongsToMany(Categoria::class, 'categoria_curso', 'curso_id', 'categoria_id');
    }


}

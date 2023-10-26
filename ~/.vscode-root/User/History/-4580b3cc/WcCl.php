<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'apellido', 'email']; // Define los campos que se pueden asignar masivamente

    public function cursos()
    {
        return $this->belongsToMany(Curso::class);
    }
}

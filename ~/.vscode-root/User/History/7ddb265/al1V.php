<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = ['nombre']; // Define los campos que se pueden asignar masivamente

    public function cursos()
    {
        return $this->belongsToMany(Curso::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'curso_id']; // Define los campos que se pueden asignar masivamente

    public function curso()
    {
        return $this->belongsTo(Curso::class, 'curso_id');
    }
}

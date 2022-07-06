<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfiles extends Model
{
    use HasFactory;

    protected $fillable = ['nombre_perfil'];

    public function alumnos()
    {
        return $this->belongsToMany(Alumno::class);
    }
}

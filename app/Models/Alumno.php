<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    protected $fillable = ['fullname', 'perfil_id'];


    public function perfil()
    {
        return $this->belongsTo(Perfiles::class);
    }

    public function curso()
    {
        return $this->belongsToMany(Curso::class);
    }

}

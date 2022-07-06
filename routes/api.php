<?php

use App\Http\Controllers\Api\AlumnoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('alumnos/all', [AlumnoController::class, 'getAll']);
Route::get('alumnos/cursos/{id}/{perfil_id}', [AlumnoController::class, 'getCursos']);
Route::get('alumnos/temas/{id}/{curso_id}', [AlumnoController::class, 'getTemas']);

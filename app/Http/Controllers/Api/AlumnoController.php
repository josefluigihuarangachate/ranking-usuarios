<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Alumno;
use App\Models\Curso;
use App\Models\Tema;

class AlumnoController extends Controller
{
    public function getAll()
    {
        $alumnos = Alumno::with('perfil')->get();

        foreach ($alumnos as $key1 => $value1) {

            $cursos = Curso::where('perfil_id', $value1['perfil_id'])
            ->where('alumnos_cursos.alumno_id', $value1['id'])
            ->join('alumnos_cursos', 'cursos.id', '=', 'alumnos_cursos.curso_id')
            ->get();

            $cursos_aprobados = 0;

            foreach ($cursos as $key2 => $value2) {

                $temas = Tema::where('cursos_temas.curso_id', $value2['curso_id'])
                    ->where('cursos_temas.alumno_id', $value1['id'])
                    ->join('cursos_temas', 'temas.id', '=', 'cursos_temas.tema_id')
                ->get();

                $sum = $temas->sum('nota');
                $cantidad = count($temas);

                $promedio = $sum / $cantidad;

                if ($value2['status'] == 1) {
                    $cursos_aprobados++;
                }

            }
        }

        $data = [
            'puntaje' => '12'
        ];

        array_push($data, $alumnos);

        return response()->json([
            'success' => true,
            'data' => $alumnos
        ], 201);
    }

    public function getCursos($id, $perfil_id)
    {
        $cursos = Curso::where('perfil_id', $perfil_id)
        ->where('alumnos_cursos.alumno_id', $id)
        ->join('alumnos_cursos', 'cursos.id', '=', 'alumnos_cursos.curso_id')
        ->get();

        return response()->json([
            'success' => true,
            'data' => $cursos
        ], 201);
    }

    public function getTemas($id, $curso_id)
    {
        $temas = Tema::where('cursos_temas.curso_id', $curso_id)
        ->where('cursos_temas.alumno_id', $id)
        ->join('cursos_temas', 'temas.id', '=', 'cursos_temas.tema_id')
        ->get();

        return response()->json([
            'success' => true,
            'data' => $temas
        ], 201);
    }


}

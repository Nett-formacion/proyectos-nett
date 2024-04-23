<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;
use App\Models\Idioma;

class AlumnoController extends Controller
{
    //

    public function index()
    {
        $alumnos = Alumno::all();
        return view("alumnos.listado", ["alumnos" => $alumnos]);
    }

    public function create()
    {
        $idiomas = config("idiomas");
        return view("alumnos.create", compact("idiomas"));
    }

    public function store(Request $request)
    {
        $datos = $request->input();

        $alumno = new Alumno($datos);
        $alumno->save();
        $idiomas = $datos['idiomas'];
        foreach ($idiomas as $idioma_hablado) {
            $idioma = new Idioma();
            $idioma->idioma = $idioma_hablado;
            $idioma->alumno_id = $alumno->id;
            $idioma->save();
        }
        return redirect(route("alumnos.index"));

    }

    public function delete(int $id)
    {
        $alumno = Alumno::find($id);


        $alumno->delete();
        $alumnos = Alumno::all();
        return view("alumnos.listado", ["alumnos" => $alumnos]);

    }

    public function edit(Alumno $alumno)
    {

        $idiomas = config("idiomas");
        return view("alumnos.edit", compact("alumno", "idiomas"));

    }

    public function update(Request $request, Alumno $alumno)
    {
        $datos = $request->input();
        $alumno->update($datos);

        $alumno->idiomas()->delete();

        $idiomas = $datos['idiomas'];
        foreach ($idiomas as $idioma_hablado) {
            $idioma = new Idioma();
            $idioma->idioma = $idioma_hablado;
            $idioma->alumno_id = $alumno->id;
            $idioma->save();
        }
        return redirect(route("alumnos.index"));
    }
    public function destroy(Alumno $alumno)
    {
        $alumno->delete();
        return redirect(route("alumnos.index"));
    }
}

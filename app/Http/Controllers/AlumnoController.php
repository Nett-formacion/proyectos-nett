<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;

class AlumnoController extends Controller
{
    //

    public function index(){
        $alumnos = Alumno::all();
        return view ("proyectos.alumnos", ["alumnos"=>$alumnos]);
    }
    public function create(){
        return view ("proyectos.alumno_create");
    }

    public function store(Request $request){
        $alumno = new Alumno($request->input());
        $alumno->save();
        $alumnos = Alumno::all();
        return view ("proyectos.alumnos", ["alumnos"=>$alumnos]);

    }

    public function delete(int $id){
        $alumno = Alumno::find($id);


        $alumno->delete();
        $alumnos = Alumno::all();
        return view ("proyectos.alumnos", ["alumnos"=>$alumnos]);

    }

    public function edit (int $id){
        $alumno = Alumno::find($id);
        return view ("proyectos.alumno_edit", ["alumno"=>$alumno]);


    }
}

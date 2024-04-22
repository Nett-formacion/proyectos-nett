<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use App\Http\Requests\StoreProyectoRequest;
use App\Http\Requests\UpdateProyectoRequest;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Obtengo un listado con todos los proyectos
        // select * from proyectos;
        $proyectos = Proyecto::all();
        return view ("proyectos.listado",["proyectos"=>$proyectos]);

        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ("proyectos.create");
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProyectoRequest $request)
    {
        $datos = $request->input();
        $proyecto = new Proyecto($datos);
        $proyecto->save();
        session()->flash("status", "Se ha creado el proyecto");
        return redirect(route("proyectos.index"));




        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Proyecto $proyecto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proyecto $proyecto)
    {

        return view ("proyectos.edit", ["proyecto"=>$proyecto]);
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProyectoRequest $request, Proyecto $proyecto)
    {
        $datos = $request->input();
        $proyecto->update($datos);
        session()->flash("status", "Se ha Actualizado  el proyecto");
        return redirect(route("proyectos.index"));
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proyecto $proyecto)
    {
        $proyecto->delete();
        session()->flash("status", "Se ha Borrado  el proyecto");

        return redirect(route("proyectos.index"));
        //
    }
}

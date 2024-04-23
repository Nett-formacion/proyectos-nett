<x-layouts.layout>
    <div class=" flex flex-row justify-center items-center p-8 h-full">
            <form action="{{route("alumnos.update", $alumno->id)}}" class="space-y-8" method="POST">
                @csrf
                @method("PUT")
                Nombre <input type="text" value="{{$alumno->nombre}}" name="nombre" id=""><br />
                Direccion <input type="text" value="{{$alumno->direccion}}" name="direccion" id=""><br />
                email <input type="text" value="{{$alumno->email}}"name="email" id=""><br />
                edad <input type="text" value="{{$alumno->edad}}" name="edad" id=""><br />
                dni <input type="text" value="{{$alumno->dni}}"name="dni" id=""><br />
                <div>
                    @foreach($idiomas as $idioma)
                        {{$idioma}}
                        <input type="checkbox"
                        {{$alumno->idiomas->contains("idioma",$idioma) ? "checked": ""}}
                                          name="idiomas[]" value="{{$idioma}}" id=""><br/>
                    @endforeach
                        <input type="submit" class="btn btn-primary" value="Guardar">

                </div>

            </form>
        </div>
    </section>
    </div>
</x-layouts.layout>



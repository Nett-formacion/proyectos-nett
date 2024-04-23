<x-layouts.layout>
    <div class=" flex flex-row justify-center items-center p-8 h-full">
        <form action="{{route("alumnos.store")}}"  method="POST"
              class = "flex flex-row justify-between w-1/2">
            @csrf
            <div>
            Nombre <input type="text" value="{{old("nombre")}}" name="nombre" id=""><br/>
            email <input type="text" name="email" id=""><br/>
            edad <input type="text" name="edad" id=""><br/>
            dni <input type="text" name="dni" id=""><br/>
            </div>
            <div>
            @foreach($idiomas as $idioma)
                {{$idioma}}<input type="checkbox" name="idiomas[]" value="{{$idioma}}" id=""><br/>
            @endforeach
                <input type="submit" class="btn btn-primary" value="Guardar">

            </div>

        </form>
    </div>
    </section>
    </div>
</x-layouts.layout>



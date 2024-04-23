<x-layouts.layout>
    <h1>Listado de alumnos</h1>
    <a class="btn btn-primary" href="/alumnos/create">Nuevo Alumno</a>
    <div class="overflow-x-auto h-full">
        <table class="table table-xs table-pin-rows table-pin-cols">
            <thead>
            <tr>
                <th>nombre</th>
                <th>dni</th>
                <th>edad</th>
                <th>email</th>
                <th>Idiomas</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($alumnos as $alumno)
                <tr>
                    <td>{{$alumno->nombre}}</td>
                    <td>{{$alumno->dni}}</td>
                    <td>{{$alumno->edad}}</td>
                    <td>{{$alumno->email}}</td>
                    <td>
                        <select name="" id="">
                            @foreach($alumno->idiomas as $idioma)
                                <option>{{$idioma->idioma}}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        {{--                Delete --}}
                        <form id="formulario{{$alumno->id}}" onsubmit=event.preventDefault() action="/alumnos/{{$alumno->id}}" method="POST">
                            @method("DELETE")
                            @csrf
                            <button  onclick="confirmDelete({{$alumno->id}})">

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-red-600">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0"/>
                        </svg>
                            </button>
                        </form>
                    </td>
                    <td>
                        <a href="{{route("alumnos.edit", $alumno->id)}}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-blue-500">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M9 8.25H7.5a2.25 2.25 0 0 0-2.25 2.25v9a2.25 2.25 0 0 0 2.25 2.25h9a2.25 2.25 0 0 0 2.25-2.25v-9a2.25 2.25 0 0 0-2.25-2.25H15m0-3-3-3m0 0-3 3m3-3V15"/>
                            </svg>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <script>
        function confirmDelete(id){
            swal({
                title:"Seguro que quieres borrar",
                text: "Esta acción es  no reversible",
                icon: "info",
                buttons:true,
            })
                .then((resultado)=>{
                    if (resultado){
                        document.getElementById("formulario"+id).submit()
                    }
                });
        }
    </script>


</x-layouts.layout>



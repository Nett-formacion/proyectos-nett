<x-layouts.layout>

    <div class=" flex flex-row justify-center items-center p-8 h-full">
            <form id="updateForm{{$proyecto->id}}" action="{{route("proyectos.update", $proyecto->id)}}" method="POST"  class="bg-white rounded p-5">
                @method("PUT")
                @csrf
                <x-input-label  > Titulo</x-input-label>
                @if( $errors->get("titulo"))
                    @foreach($errors->get("titulo") as $error)
                        <div class="text-red-600 text-sm"> {{$error}}</div>
                    @endforeach
                @endif
                <x-text-input value="{{$proyecto->titulo}}" name="titulo"/>

                <x-input-label  > URL</x-input-label>
                @if ($errors->get("url"))
                @foreach($errors->get("url") as $error)
                    <div class="text-red-600 text-sm"> {{$error}}</div>
                @endforeach
                @endif
                <x-text-input value="{{$proyecto->url}}" name="url"/>



                <x-input-label > Horas</x-input-label>
                @if ($errors->get("horas"))
                @foreach($errors->get("horas") as $error)
                    <div class="text-red-600 text-sm"> {{$error}}</div>
                @endforeach
                @endif
                <x-text-input value="{{$proyecto->horas}}" name="horas"/>

                <button onclick="updateForm({{$proyecto->id}})" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </section>
    </div>
    <script>
        function updateForm(id){
            swal({
                title:"¿Actualizar Proyecto",
                text: "Se modificará en la base de datos",
                icon:"info",
                buttons: true
            })
                .then((resultado)=>{
                    if (resultado)
                        document.getElementById("updateForm"+id).submit();
                });
        }
        </script>
</x-layouts.layout>



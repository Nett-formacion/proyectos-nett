<x-layouts.layout>
    <div class=" flex flex-row justify-center items-center p-8 h-full">
            <form action="/alumnos/store" class="space-y-8" method="POST">
                @csrf
                Nombre <input type="text" value="{{old("nombre")}}" name="nombre" id=""><br />
                Direccion <input type="text" name="direccion" id=""><br />
                email <input type="text" name="email" id=""><br />
                edad <input type="text" name="edad" id=""><br />
                dni <input type="text" name="dni" id=""><br />
                <input type="submit" class="btn btn-primary" value="Guardar">
            </form>
        </div>
    </section>
    </div>
</x-layouts.layout>



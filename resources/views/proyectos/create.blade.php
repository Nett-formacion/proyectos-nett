<x-layouts.layout>

    <div class=" flex flex-row justify-center items-center p-8 h-full">
            <form action="{{route("proyectos.store")}}" method="POST"  class="bg-white rounded p-5">
                @csrf
                <x-input-label  > {{__(Titulo)}}</x-input-label>
                @if( $errors->get("titulo"))
                    @foreach($errors->get("titulo") as $error)
                        <div class="text-red-600 text-sm"> {{$error}}</div>
                    @endforeach
                @endif
                <x-text-input :value="old('titulo')" name="titulo"/>

                <x-input-label  > URL</x-input-label>
                @if ($errors->get("url"))
                @foreach($errors->get("url") as $error)
                    <div class="text-red-600 text-sm"> {{$error}}</div>
                @endforeach
                @endif
                <x-text-input :value="old('url')" name="url"/>



                <x-input-label > Horas</x-input-label>
                @if ($errors->get("horas"))
                @foreach($errors->get("horas") as $error)
                    <div class="text-red-600 text-sm"> {{$error}}</div>
                @endforeach
                @endif
                <x-text-input :value="old('horas')" name="horas"/>


                <input type="submit" class="btn btn-primary" value="Guardar">
            </form>
        </div>
    </section>
    </div>
</x-layouts.layout>



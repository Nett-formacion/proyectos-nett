<nav class="h-10v bg-nav flex flex-row justify-start items-center  px-5 space-x-2">
    <a class="btn  btn-primary" href="/">Home</a>
    <a class="btn btn-secondary" href="{{route("about")}}">About</a>
    @auth
        <a class="btn  btn-active" href="{{route("proyectos.index")}}">Proyectos</a>
    @endauth
    <a class="btn  btn-accent" href="{{route("alumnos.index")}}">Alumnos</a>
    <a class="btn  btn-warning" href="contacta">Contacta</a>
</nav>

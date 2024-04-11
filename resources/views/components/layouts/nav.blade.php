<nav class="h-10v bg-nav flex flex-row justify-start items-center  px-5 space-x-2">
    <a class="btn  btn-primary" href="/">Home</a>
    <a class="btn btn-secondary" href="about">About</a>
    @auth
        <a class="btn  btn-active" href="proyectos">Proyectos</a>
    @endauth
    <a class="btn  btn-accent" href="alumnos">Alumnos</a>
    <a class="btn  btn-warning" href="contacta">Contacta</a>
</nav>

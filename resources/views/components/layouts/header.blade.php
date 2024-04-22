<header class="h-15v bg-header flex flex-row justify-between items-center p-4">

    <img class="max-h-full" src="{{asset("/images/logo.png")}}" alt="Logo">
    <h1 class="text-6xl text-white">{{__("Laravel App")}}</h1>
    @guest
        <div>
            <a href="login" class="btn glass ">Acceder</a>
            <a href="register" class="btn glass">Registrame</a>
        </div>
    @endguest
    @auth
        <div class="flex space-x-2">
            <h2 class="text-white text-2xl"> {{auth()->user()->name}}</h2>
            <form action="logout" method="POST">
                @csrf
                <button type="submit" class="btn glass">Logout</button>

            </form>
        </div>
    @endauth


</header>

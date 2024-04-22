<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title ?? "proyectos"}}</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @vite(['resources/css/app.css'])

</head>
<body>


<x-layouts.header />
<x-layouts.nav />
<x-layouts.main >
    {{$slot}}
</x-layouts.main>
<x-layouts.footer />


</body>
</html>

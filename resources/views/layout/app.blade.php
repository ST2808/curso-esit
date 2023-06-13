<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('proyectos.png') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    @vite(['resources/js/app.js', 'resources/sass/app.scss'])
    <title>Proyectos</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg w-100">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('indexProyectos')}}">Gestión de proyectos</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('indexProyectos')}}">Incio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('aboutProyectos')}}">Nosotros</a>
                    </li>
                </ul>
                <form class="d-flex flex-row" action="{{ route('findProyectos') }}" method="POST">
                    @csrf
                    @method('post')
                    <input class="form-control me-2" type="text" placeholder="Buscar proyecto" id="nombre" name="nombre" idaria-label="Search">
                    <button class="mr- btn btn-outline-success" type="submit"><i class="bi bi-search"></i>Buscar</button>
                </form>
            </div>
        </div>
    </nav>

    {{-- Contenido --}}
    <main class="container">

        {{-- Title --}}
        <h2 class="text-black text-center fs-1 mb-10">
            @yield('title')
        </h2>

        {{-- Alers --}}
        <div>
            @yield('alerts')
        </div>

        {{-- Content --}}
        <div>
            @yield('content')
        </div>
    </main>

    {{-- Pie de pagina --}}
    <footer class="container mt-5">
        <div class="text-center fs-5 text-secondary">
            GDP-ESIT - Todos los derechos reservados 2020-{{date('Y')}}
        </div>
    </footer>

    @stack('scripts')
</body>
</html>

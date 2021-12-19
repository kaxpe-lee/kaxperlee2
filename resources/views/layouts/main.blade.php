<!DOCTYPE html>
<html lang="es">

<head>
    <title>Kaxper Lee</title>
    <meta charset="UTF-8">
    <meta name="title" content="Título de la WEB">
    <meta name="description" content="Descripción de la WEB">
    <!-- Bootstrap CSS -->
    <link REL="stylesheet" href="{{asset('css/estilos.css')}}">
    <link REL="stylesheet" href="{{asset('css/estilos.css.map')}}">
    <link REL="stylesheet" href="{{asset('css/custom.css')}}">
    @livewireStyles
</head>

<body class="bg-dark">
    <nav class="navbar navbar-expand d-flex fixed-top px-4 bg-dark">
        <div class="me-auto logo bg-dark text-center d-flex align-items-center mb-3" style="width:310px; border-bottom:1px solid #333; min-height:100px;">
            <a class="navbar-brand link-secondary" href="#">KAXPER LEE</a>
        </div>
        <div class="bg-dark d-flex flex-grow-1 ms-4 mb-3" style="border-bottom:1px solid #333;min-height:100px;">
            <ul class="navbar-nav flex align-items-center menu ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item menu">
                    <a class="nav-link" href="enlaces/">Enlaces</a>
                </li>
                <li class="nav-item menu">
                    <a class="nav-link" href="{{route('libros.index')}}">Biblioteca</a>
                </li>
            </ul>
        </div>
        
    </nav>
    <div class="d-flex container-fluid m-0 px-4 bg-dark"
        style="height: 100vh;padding-top:110px; background-color: orange">
        <aside class="" style="min-width:310px;width:310px;background-color: #111">
            <div class="mb-4" style="border-bottom: 1px solid #333"></div>
            <!-- Acordion -->
            @yield('sidebar')
            <!-- /Acordion -->
        </aside>
        <section class="flex-fill" style="margin-left: 20px;border-top:0px solid #333">
            <div class="mb-4" style="border-bottom: 1px solid #333"></div>
            <article class="px-0 mb-5">
                @yield('main_title')
                @yield('main')
                <!-- /Album -->
            </article>
        </section>
    </div>
    <footer class="bg-dark navbar fixed-bottom navbar-expand-sm d-flex justify-content-between px-5">
        <div>Foot 1</div>
        <div>Foot 2</div>
        <div>Foot 3</div>
    </footer>
   
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    @livewireScripts
</body>

</html>

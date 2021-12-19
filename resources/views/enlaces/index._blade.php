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
    @livewireStyles
</head>

<body class="bg-dark">
    @livewire('show-title')
    <nav class="navbar navbar-expand d-flex fixed-top align-items-center px-4 bg-dark" style="height: 100px;">
        
        <div class="me-auto logo bg-dark text-center" style="width:310px; border-bottom:0px solid red">
            <a class="navbar-brand link-secondary" href="#">KAXPER LEE</a>
        </div>
        <ul class="navbar-nav flex align-items-center menu bg-dark">
            <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item menu">
                <a class="nav-link" href="enlaces/">Enlaces</a>
            </li>
            <li class="nav-item menu">
                <a class="nav-link" href="libros/">Biblioteca</a>
            </li>
            <li class="nav-item menu">
                <a class="nav-link" href="#">Opción 4</a>
            </li>
            <li class="nav-item menu">
                <a class="nav-link" href="#">Opción 5</a>
            </li>
            <li class="nav-item menu">
                <a class="nav-link" href="#">Opción 6</a>
            </li>
        </ul>
    </nav>
    <div class="d-flex container-fluid m-0 px-4 bg-dark"
        style="height: 100vh;padding-top:100px; background-color: orange">
        <aside class="" style="min-width:310px;width:310px;background-color: #111">
            <div class="mb-4" style="border-bottom: 1px solid #333"></div>
            <!-- Acordion -->
            
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button text-secondary fs-5 py-2" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                            aria-controls="collapseOne">
                            Programación
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body pt-0">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-0 small acordeon">
                                <li class='pb-1'><a href="#" class="link-secondary">Laravel</a></li>
                                <li class='pb-1'><a href="#" class="link-secondary">Bootstrap</a></li>
                                <li class='pb-1'><a href="#" class="link-secondary">Trailwind</a></li>
                                <li class='pb-1'><a href="#" class="link-secondary">Python</a></li>
                                <li class='pb-1'><a href="#" class="link-secondary rounded">Wordpress</a></li>
                                <li class='pb-1'><a href="#" class="link-secondary">Php</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed text-secondary  fs-5 py-2" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                            aria-controls="collapseTwo">
                            Diseño y recursos
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-0 small acordeon">
                                <li class='pb-1'><a href="#" class="link-secondary">Laravel</a></li>
                                <li class='pb-1'><a href="#" class="link-secondary">Bootstrap</a></li>
                                <li class='pb-1'><a href="#" class="link-secondary">Trailwind</a></li>
                                <li class='pb-1'><a href="#" class="link-secondary">Python</a></li>
                                <li class='pb-1'><a href="#" class="link-secondary">Wordpress</a></li>
                                <li class='pb-1'><a href="#" class="link-secondary">Php</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed text-secondary fs-5 py-2" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                            aria-controls="collapseThree">
                            Música
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">

                        </div>
                    </div>
                </div>
            </div>
            <!-- /Acordion -->

        </aside>
        <section class="flex-fill" style="margin-left: 20px;border-top:0px solid #333">
            <div class="mb-4" style="border-bottom: 1px solid #333"></div>
            <article class="px-0 mb-5">
                <h4 class="text-secondary">ENLACES</h4>
                @livewire('show-title')
                @livewire('show-title2')
                <!-- Album -->
                <div class="album py-2 bg-dark">
                    <div class="container-fluid">
                        <div class="row g-4">
                            @foreach ($enlaces as $enlace)
                            <div class="col-3">
                                <div class="card"  style="background-color:#222">
                                    <img src="{{asset('img/enlaces/'.$enlace->id.'.jpg')}}" class="img-responsive" alt="Laravel">
                                    <div class="card-body">
                                        <h5 class="card-title text-secondary">{{$enlace->Nombre}}</h5>
                                        <p class="card-text text-secondary">{{$enlace->Descripcion}}</p>
                                        <a href="https://{{$enlace->Direccion}}" class="btn btn-secondary">Go</a>
                                    </div>
                                 </div>
                            </div>
                            @endforeach
                            


                        </div>
                    </div>
                </div>
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

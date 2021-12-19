<!DOCTYPE html>
<html lang="es">

<head>
    <title>Kaxper Lee - Biblioteca</title>
    <meta charset="UTF-8">
    <meta name="title" content="Título de la WEB">
    <meta name="description" content="Descripción de la WEB">
    <!-- Bootstrap CSS -->
    <link REL="stylesheet" href="{{asset('css/estilos.css')}}">
    <link REL="stylesheet" href="{{asset('css/estilos.css.map')}}">
    <link REL="stylesheet" href="{{asset('css/custom.css')}}">
</head>

<body class="bg-dark">
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
                             Género
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body pt-0">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-0 small acordeon">
                                <li class='pb-1'><a href="#" class="link-secondary">Fantasía</a></li>
                                <li class='pb-1'><a href="#" class="link-secondary">Terror</a></li>
                                <li class='pb-1'><a href="#" class="link-secondary">Ciencia Ficción</a></li>
                                <li class='pb-1'><a href="#" class="link-secondary">Policiaca</a></li>
                                <li class='pb-1'><a href="#" class="link-secondary rounded">Divulgativa</a></li>
                                <li class='pb-1'><a href="#" class="link-secondary">Autoayuda</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed text-secondary  fs-5 py-2" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                            aria-controls="collapseTwo">
                            Autores
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-0 small acordeon">
                                <li class='pb-1'><a href="#" class="link-secondary">Robert Jordan</a></li>
                                <li class='pb-1'><a href="#" class="link-secondary">J.R.R. Tolkien</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed text-secondary fs-5 py-2" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                            aria-controls="collapseThree">
                            Colecciones
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
        <section class="flex-fill" style="margin-left: 20px;border-top:0px solid #333;">
            <div class="mb-4" style="border-bottom: 1px solid #333"></div>
            <article class="px-0 p-2" >
                <h4 class="text-secondary p-2">BIBLIOTECA</h4>
                <ul class="book-list">
                    <li class="book1"><a href="">
                      <img src="epub/01cover.jpg"  alt="" />
                      </a>
                    </li>
                    <li class="book2"><a href=""><img src="epub/02cover.jpg" alt="" />
                      </a>
                    </li>
                    <li class="book3">
                      <a href=""><img src="epub/03cover.jpg" alt="" />
                      </a>
                    </li>
                    <li class="book4">
                      <a href="">
                        <img src="epub/04cover.jpg" alt="" />
                      </a>
                    </li>
                    <li class="book5">
                      <a href="">
                        <img src="epub/05cover.jpg" alt="" />
                      </a>
                    </li>
                    <li class="book6">
                      <a href="">
                        <img src="epub/06cover.jpg" alt="" />
                      </a>
                    </li>
                    <li class="book7">
                      <a href="">
                        <img src="epub/07cover.jpg" alt="" />
                      </a>
                    </li>
                    <li class="book8">
                      <a href="">
                        <img src="epub/08cover.jpg" alt="" />
                      </a>
                    </li>
                    <li class="book9">
                      <a href="">
                        <img src="epub/09cover.jpg" alt="" />
                      </a>
                    </li>
                  </ul>
            </article>
        </section>
    </div>
    <footer class="bg-dark navbar fixed-bottom navbar-expand-sm d-flex justify-content-between px-5">
        <div>Foot 1</div>
        <div>Foot 2</div>
        <div>Foot 3</div>
    </footer>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
</body>

</html>

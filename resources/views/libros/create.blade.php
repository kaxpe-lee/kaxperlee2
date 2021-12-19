
@extends('layouts.main')

@section('sidebar')
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
@endsection

@section('main')
<form action="{{route('libros.store')}}" method="post">
    @csrf
    <label>
        Título:
        <input type="text" name="title">
    </label>
    <br/>
    <br/>
    <label>
        Título 2:
        <input type="text" name="sort">
    </label>
    <br/>
    <br/>
    <label>
        Autor:
        <input type="text" name="author_sort">
    </label>
    <br><br>
    <button type="submit">Enviar</button>
    
</form>
@endsection

@section('main_title')
<h4 class="text-secondary  p-2">NUEVO LIBRO</h4>    
@endsection
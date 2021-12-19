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
<ul class="book-list d-flex flex-wrap justify-content-around bg-dark ps-0">
@foreach ($libros as $libro)
  <li class="book1 flex flex-column"><a href="{{route('libros.show', $libro->id)}}"><img src="epub/{{$libro->id}}cover.jpg" width="300px"  height="" alt="" /></a></li>
@endforeach
  
@endsection

@section('main_title')
<div class="text-secondary p-2 d-flex justify-content-between">
  <h4 class="">BIBLIOTECA</h4>
  <h5><a class="btn btn-secondary btn-sm" href="{{route('libros.create')}}">+</a></h5>
</div>
  
@endsection
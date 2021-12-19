@extends('layouts.main')

@section('sidebar')
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
@endsection

@section('main')
<div class="d-flex flex-wrap justify-content-around bg-dark ps-0">
    @foreach ($enlaces as $enlace)
    <div class="card mb-5" style="width: 22rem; background-color:#222">
        <img src="{{asset('img/enlaces/'.$enlace->id.'.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title text-secondary">{{$enlace->Nombre}}</h5>
          <p class="card-text text-secondary">{{$enlace->Descripcion}}</p>
          <div class="d-flex flex-fill">
            <a href="https://{{$enlace->Direccion}}" class="btn btn-secondary align-self-end">Go</a>
          </div>
        </div>
    </div>
    @endforeach
</div>    
@endsection

@section('main_title')
<h4 class="text-secondary  p-2">ENLACES</h4>    
@endsection

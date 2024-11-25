

@extends('layouts.plantilla')

@section('titulo','Recuerdos')


@section('contenido')



<h1 class="display-1 text-center text-danger mt-5 "> Recuerdos </h1>

<div class="container">

@foreach ($consulRecuerdos as $item)
<div class="card w-75 mb-3 mt-5">
    <div class="card-body">
      <h4 class="card-title fw-semibold"> {{ $item->titulo }} </h4>
      <p class="card-text fst-italic "> {{ $item->fecha }}</p>
      <p class="card-text fw-lighter"> {{ $item->recuerdo }}</p>
      <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editar{{ $item->id }}">
        Editar
      </button>
      <a href="#" class="btn btn-danger"> Borrar </a>
    </div>
  </div>

  @include('partials.modal')

@endforeach

</div>{{-- cierre del contenedor --}}
  
@endsection



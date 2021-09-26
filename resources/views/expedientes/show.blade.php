@extends('layouts.plantilla')

@section('title', 'Expediente'.$expte)

@section('content')
    <h1>Ud. esta consultando el expediente N°: CNE {{$expte->numexpte,}}/{{$expte->yearexpte}}</h1>
        <h2> Caratulado: {{$expte->caratula}} s/ {{$expte->objeto}}</h2>
        <a href="{{route('expedientes.index')}}"><button>Volver a Expedientes</button></a>
        <a href="{{route('expedientes.edit', $expte)}}"><button>Editar Expediente</button></a>
        <p><strong>Categoría: </strong>{{$expte->category}}, <strong>Estado:</strong>{{$expte->cad}}</p><br>
        <p><strong>Ultimo Movimiento Registrado: </strong>{{$expte->ulmov}}, <strong>En fecha: </strong>{{$expte->date}}</p><br>
        <p><strong>Última Modificación: </strong>{{$expte->updated_at}}</p>
@endsection()

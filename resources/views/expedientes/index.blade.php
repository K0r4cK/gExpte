

@extends('layouts.plantilla')

@section('title', 'Expedientes')

@section('content')
    <h1>"Bienvenido a la sección Expedientes"</h1>
    <a href="{{route('expedientes.create')}}">
        <button>Nuevo Expediente</button>
    </a>
    <ul>
        @foreach ($files as $expte)
            <li>{{$expte->title}}</li>
        @endforeach
    </ul>

    {{$files->links()}}

@endsection()

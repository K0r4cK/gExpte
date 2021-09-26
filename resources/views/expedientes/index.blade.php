

@extends('layouts.plantilla')

@section('title', 'Expedientes')

@section('content')
    <h1>"Bienvenido a la sección Expedientes"</h1>
        <a href="{{route('expedientes.create')}}">
            <button>Nuevo Expediente</button>
        </a>
    <ul>
        @foreach ($files as $expte)
            <li>
                <a href="{{route('expedientes.show', $expte->id)}}">{{$expte->caratula}} s/ {{$expte->objeto}}
            </li>
        @endforeach
    </ul>

    {{$files->links()}}

@endsection()

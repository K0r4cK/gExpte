@extends('layouts.plantilla')

@section('title', 'Expediente'.$expte)

@section('content')
    <h1>Ud. esta consultando el expediente: {{$expte}}</h1>
@endsection()

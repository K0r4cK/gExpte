@extends('layouts.plantilla')

@section('title', 'Carga de Expedientes')

@section('content')
<h1>"En esta sección podrá cargar un nuevo expediente";</h1>
<a href="{{route('expedientes.index')}}"><button>Volver a Expedientes</button></a>
<br>
<br>
<form action="{{route('expedientes.store')}}"  method="POST">

    @csrf

    <label>
        <strong>Numero Expte.:</strong>
        <input type="number" name="numexpte" value="{{old('numexpte')}}">
    </label>

    @error('numexpte')
    <br>
    <small>{{$message}}</small>
    <br>
    @enderror

    <label>
        <strong>Año Expte.:</strong>
        <input type="number" name="yearexpte" value="{{old('yearexpte')}}">
    </label>

    @error('yearexpte')
    <br>
    <small>{{$message}}</small>
    <br>
    @enderror

<br>
<br>
    <label>
        <strong>Caratula:</strong>
        <input type="text" style="width: 150px" name="caratula" value="{{old('caratula')}}">
    </label>

    @error('caratula')
    <br>
    <small>{{$message}}</small>
    <br>
    @enderror

    <label>
        <strong>Objeto:</strong>
        <input type="text" style="width: 250px" name="objeto" value="{{old('objeto')}}">
    </label>

    @error('objeto')
    <br>
    <small>{{$message}}</small>
    <br>
    @enderror

<br>
<br>
    <label>
        <strong>Categoría:</strong>
        <input type="text" style="width: 100px" name="category" value="{{old('category')}}">
    </label>

    @error('category')
    <br>
    <small>{{$message}}</small>
    <br>
    @enderror

    <label>
        <strong>Último Movimiento:</strong>
        <input type="text" style="width: 350px" name="ulmov" value="{{old('ulmov')}}">
    </label>

    @error('ulmov')
    <br>
    <small>{{$message}}</small>
    <br>
    @enderror

<br>
<br>
    <label>
        <strong>Estado:</strong>
    </label><br>
    <div>
        <label>Caduco</label><input type="checkbox" name="cad"  value="Caduco">
        <label>Provisorio</label><input type="checkbox" name="cad" value="Provisorio">
        <br>
        <label>Definitivo</label><input type="checkbox" name="cad" value="Definitivo">
        <label>Trámite</label><input type="checkbox" name="cad" value="Trámite">
    </div>
    @error('cad')
    <br>
    <small>{{$message}}</small>
    <br>
    @enderror
<br>
<br>
<button type="submit">Enviar Formulario</button>
</form>
@endsection()

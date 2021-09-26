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
        <input type="number" name="numexpte">
    </label>

    <label>
        <strong>Año Expte.:</strong>
        <input type="number" name="yearexpte">
    </label><br>
<br>
    <label>
        <strong>Caratula:</strong>
        <input type="text" name="caratula">
    </label>

    <label>
        <strong>Objeto:</strong>
        <input type="text" name="objeto">
    </label><br>
<br>
    <label>
        <strong>Categoría:</strong>
        <input type="text" name="category">
    </label>

    <label>
        <strong>Último Movimiento:</strong>
        <input type="text" name="ulmov">
    </label><br>
<br>
    <label>
        <strong>Estado:</strong>
    </label>
        <label>Caduco</label><input type="checkbox" name="cad"  value="caduco">
        <label>Provisorio</label><input type="checkbox" name="cad" value="provisorio">
        <label>Definitivo</label><input type="checkbox" name="cad" value="vigente">
        <label>Tramite</label><input type="checkbox" name="cad" value="tramite">
    </label>
<br>
<br>
<button type="submit">Enviar Formulario</button>
</form>
@endsection()

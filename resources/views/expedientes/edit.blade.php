@extends('layouts.plantilla')

@section('title', 'Edicion de Expedientes')

@section('content')
<h1>"En esta sección podrá editar un expediente";</h1>
<a href="{{route('expedientes.index')}}"><button>Volver a Expedientes</button></a>
<br>
<br>
<form action="{{route('expedientes.update', $expte)}}" method="POST">

    @csrf

    @method('put')

    <label>
        <strong>Numero Expte.:</strong>
        <input type="number" name="numexpte" value="{{$expte->numexpte}}">
    </label>

    <label>
        <strong>Año Expte.:</strong>
        <input type="number" name="yearexpte" value="{{$expte->yearexpte}}">
    </label><br>
<br>
    <label>
        <strong>Caratula:</strong>
        <input type="text" style="width: 150px" name="caratula" value="{{$expte->caratula}}">
    </label>

    <label>
        <strong>Objeto:</strong>
        <input type="text" style="width: 250px" name="objeto" value="{{$expte->objeto}}">
    </label><br>
<br>
    <label>
        <strong>Categoría:</strong>
        <input type="text" style="width: 100px" name="category" value="{{$expte->category}}">
    </label>

    <label>
        <strong>Último Movimiento:</strong>
        <input type="text" style="width: 350px" name="ulmov" value="{{$expte->ulmov}}">
    </label><br>
<br>
<label>
    <strong>Estado:</strong>
</label>
<br>
    <label>Caduco</label><input type="checkbox" name="cad"  value="Caduco">
    <label>Provisorio</label><input type="checkbox" name="cad" value="Provisorio">
    <br>
    <label>Definitivo</label><input type="checkbox" name="cad" value="Definitivo">
    <label>Trámite</label><input type="checkbox" name="cad" value="Trámite">
</label>
<br>
<br>
<button type="submit">Actualizar Expediente</button>
</form>
@endsection()

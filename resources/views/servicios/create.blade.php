@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/servicio.css') }}">
<a href="{{ route('servicios.index') }}">REGRESAR</a>
<form method="post" action="{{ route('servicios.store') }}" class="my-form">
    @csrf
    
    <label for="nombre_servicio">Nombre_servicio</label>
    <input type="text" name="nombre_servicio" id="nombre_servicio" >

    <label for="descripcion">Descripcion</label>
    <input type="text" name="descripcion" id="descripcion" required>

    <label for="precio">Precio</label>
    <input type="text" name="precio" id="precio">

    <label for="nro_reserva">Numero de reserva</label>
    <input type="text" name="nro_reserva" id="nro_reserva" >

    <input type="submit" value="Create" class="btn btn-primary"/>
</form>
@endsection

@if ($clientes)
<link rel="stylesheet" href="{{ asset('css/cliente/shows.css') }}"> 
    <h1>client DETAILS</h1>
    <p>Nombre: {{ $clientes->nombre }}</p>
    <p>Apellido: {{ $clientes->apellido }}</p>
    <p>Correo: {{ $clientes->correo }}</p>
    <p>Telefono: {{ $clientes->telefono }}</p>
    <p>Numero documento: {{ $clientes->nro_doc }}</p>   
    <a href="{{ route('clientes.index') }}">Volver al Listado</a>
@else
    <p>cliente no encontrado</p>
@endif

@if ($servicios)
    <h1>DETALLES</h1>
    <p>Nombre servicio: {{ $servicios->nombre_servicio }}</p>
    <p>Descripcion: {{ $servicios->descripcion}}</p>
    <p>Precio: {{ $servicios->precio }}</p>
    <p>Numero de reserva: {{ $servicios->nro_reserva }}</p>
    
    <a href="{{ route('servicios.index') }}">Volver al Listado</a>
@else
    <p>servicio no encontrado</p>
@endif

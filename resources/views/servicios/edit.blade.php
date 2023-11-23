<h1>Editar Usuario</h1>
<form method="POST" action="{{ route('servicios.update', $servicios->id) }}">
    @csrf
    @method('PUT')
    <label for="nombre_servicio">Nombre servicio</label>
    <input type="text" name="nombre_servicio" value="{{ $servicios->nombre_servicio }}">

    <label for="descripcion">Descripcion</label>
    <input type="text" name="descripcion" value="{{ $servicios->descripcion }}">

    <label for="precio">Precio</label>
    <input type="text" name="precio" value="{{ $servicios->precio }}">

    <label for="nro_reserva">disponibilidad</label>
    <input type="text" name="nro_reserva"  value="{{ $servicios->nro_reserva }}">


    <button type="submit">Actualizar</button>
</form>
<a href="{{ route('servicios.shows', $servicios->id) }}">Ver Detalles</a>
@extends('layouts.app')

@section('content')
<a href="{{ route('room.create') }}">Create new room</a>

<table>
    <thead>
        <tr>
            <th>Numero habitacion</th>
            <th>tipo</th>
            <th>precio</th>
            <th>disponibilidad</th>
            <th>fecha</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($habitaciones as $habitacion)
            <tr>
                <td>{{ $habitacion->nro_habitacion }}</td>
                <td>{{ $habitacion->tipo }}</td>
                <td>{{ $habitacion->precio }}</td>
                <td>{{ $habitacion->disponibilidad }}</td>
                <td>{{ optional($habitacion->Reservas->first())->fecha_entrada }}</td>
                <td>
                    <a href="{{ route('room.shows', $habitacion->id) }}">Ver</a>
                    <a href="{{ route('room.edit', $habitacion->id) }}">Editar</a>
                  
                    <form method="POST" action="{{ route('room.destroy', $habitacion->id) }}">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger btn-sm" value="Eliminar">
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6">No hay datos</td>
            </tr>
        @endforelse
    </tbody>
</table>

@endsection
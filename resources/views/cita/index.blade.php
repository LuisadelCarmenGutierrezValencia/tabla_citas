@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Citas
                    <a href="{{ route('citas.create') }}" class="btn btn-primary btn-sm float-end">Nueva Cita</a>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre Cliente</th>
                                <th>Teléfono</th>
                                <th>Correo</th>
                                <th>Fecha</th>
                                <th>Hora</th>
                                <th>Confirmada</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($citas as $cita)
                                <tr>
                                    <td>{{ $cita->id }}</td>
                                    <td>{{ $cita->nombre_cliente }}</td>
                                    <td>{{ $cita->telefono }}</td>
                                    <td>{{ $cita->correo }}</td>
                                    <td>{{ $cita->fecha }}</td>
                                    <td>{{ $cita->hora }}</td>
                                    <td>{{ $cita->confirmada ? 'Sí' : 'No' }}</td>
                                    <td>
                                        <a href="{{ route('citas.show', $cita->id) }}" class="btn btn-info btn-sm">Ver</a>
                                        <a href="{{ route('citas.edit', $cita->id) }}" class="btn btn-warning btn-sm">Editar</a>
                                        <form action="{{ route('citas.destroy', $cita->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro de eliminar?')">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $citas->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

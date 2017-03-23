@extends('template.main')

@section('title', 'Lista de Lugares')

@section('content2')

    <a href="{{ route('lugares.create') }}" class="btn btn-info">Registrar Nuevo Lugar</a>

    <hr>

    <table class="table table-hover table-responsive">
        <thead>
        <th>ID</th>
        <th>Nombre</th>
        <th>Descripción</th>
        <th>Acción</th>
        </thead>
        <tbody>
        @foreach($lugares as $lugar)
            <tr>
                <td>{{ $lugar -> id }}</td>
                <td>{{ $lugar ->nombre }}</td>
                <td>{{ $lugar ->descripcion }}</td>
                <td>
                    <a href="{{ route('lugares.destroy', $lugar->id) }}" onclick="return confirm('¿Seguro que desea eliminarlo?')" class="btn btn-danger glyphicon glyphicon-remove"></a>
                    <a href="{{ route('lugares.edit', $lugar->id) }}" class="btn btn-warning glyphicon glyphicon-wrench"></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {!! $lugares -> render() !!}
@endsection

@section('footer')
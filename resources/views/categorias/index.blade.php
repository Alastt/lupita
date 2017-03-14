@extends('template.main')

@section('title', 'Lista de Categorías')

@section('content2')

    <a href="{{ route('categorias.create') }}" class="btn btn-info">Registrar Nueva Categoría</a>

    <hr>

    <table class="table table-hover table-responsive">
        <thead>
        <th>ID</th>
        <th>Nombre</th>
        <th>Acción</th>
        </thead>
        <tbody>
        @foreach($categorias as $categoria)
            <tr>
                <td>{{ $categoria -> id }}</td>
                <td>{{ $categoria ->nombre }}</td>
                <td>
                    <a href="{{ route('categorias.destroy', $categoria->id) }}" onclick="return confirm('¿Seguro que desea eliminarlo?')" class="btn btn-danger glyphicon glyphicon-remove"></a>
                    <a href="{{ route('categorias.edit', $categoria->id) }}" class="btn btn-warning glyphicon glyphicon-wrench"></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {!! $categorias -> render() !!}
@endsection

@section('footer')
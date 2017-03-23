@extends('template.main')

@section('title', 'Lista de Productos')

@section('content2')

    <a href="{{ route('productos.create') }}" class="btn btn-info">Registrar Nuevo Producto</a>

    <hr>

    <table class="table table-responsive table-bordered table-stripped">
        <thead>
        <th>ID</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Cantidad</th>
        <th>Categoría</th>
        <th>Lugar</th>
        <th>Acción</th>
        </thead>
        <tbody>
            @foreach($productos as $producto)
                <tr>
                    <td>{{ $producto->id }}</td>
                    <td>{{ $producto->nombre }}</td>
                    <td>{{ $producto->precio }}</td>
                    <td>{{ $producto->cantidad }}</td>
                    <td>{{ $producto->categoria['id'] }}</td>
                    <td>{{ $producto->lugar['nombre'] }}</td>
                    <td>
                        <a href="{{ route('productos.destroy', $producto->id) }}" onclick="return confirm('¿Seguro que desea eliminarlo?')" class="btn btn-danger glyphicon glyphicon-remove"></a>
                        <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-warning glyphicon glyphicon-wrench"></a>
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
    {!! $productos -> render() !!}
@endsection

@section('footer')
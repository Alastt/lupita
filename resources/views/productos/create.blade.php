@extends('template.main')

@section('title', 'Crear Producto')

@section('content2')

    {!! Form::open(['route' => 'productos.store', 'method' => 'POST']) !!}

    <div class="form-group">
        {!! Form::label('nombre', 'Nombre') !!}
        {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre del Producto', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('precio', 'Precio') !!}
        {!! Form::text('precio', null, ['class' => 'form-control', 'placeholder' => 'Precio unitario del Producto', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('cantidad', 'Cantidad') !!}
        {!! Form::text('cantidad', null, ['class' => 'form-control', 'placeholder' => 'Cantidad de Productos', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('categorias_id', 'Categoria') !!}
        {!! Form::select('categorias_id', $categorias, null, ['class' => 'form-control select-cat', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('lugares_id', 'Lugar') !!}
        {!! Form::select('lugares_id', $lugares, null, ['class' => 'form-control select-lug', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Crear Producto', ['class' => 'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

    <script>
        $('.select-lug').chosen({
            placeholder_text_single: 'Seleccione el lugar',
            no_results_text: "No se encuentran coincidencias!",
        });
        $('.select-cat').chosen({
            placeholder_text_single: 'Seleccione la categoría',
            no_results_text: "No se encuentran coincidencias!",
        });
        $('.textarea-content').trumbowyg({
            lang: 'es',
        });
    </script>

@endsection

@section('footer')
@extends('template.main')

@section('title', 'Crear Categoria')

@section('content2')

    {!! Form::open(['route' => 'categorias.store', 'method' => 'POST']) !!}

    <div class="form-group">
        {!! Form::label('nombre', 'Nombre') !!}
        {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre de la categoría', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

@endsection

@section('footer')
@extends('template.main')

@section('title', 'Crear Lugar')

@section('content2')

    {!! Form::open(['route' => 'lugares.store', 'method' => 'POST']) !!}

    <div class="form-group">
        {!! Form::label('nombre', 'Nombre') !!}
        {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre del lugar', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('descripcion', 'Descripción') !!}
        {!! Form::text('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Descripción del lugar', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

@endsection

@section('footer')
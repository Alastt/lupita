@extends('template.main')

@section('title', 'Editar Lugar: ' . $lugar->name)

@section('content2')

    {!! Form::model($lugar, array('route' => array('lugares.update', $lugar->id), 'method' => 'PUT')) !!}

    <div class="form-group">
        {!! Form::label('nombre', 'Nombre') !!}
        {!! Form::text('nombre', $lugar->name, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('descripcion', 'Descripción') !!}
        {!! Form::text('descripcion', $lugar->descripcion, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

@endsection

@section('footer')
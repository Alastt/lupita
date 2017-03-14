@extends('template.main')

@section('title', 'Editar Categoría: ' . $categoria->name)

@section('content2')

    {!! Form::model($categoria, array('route' => array('categorias.update', $categoria->id), 'method' => 'PUT')) !!}

    <div class="form-group">
        {!! Form::label('name', 'Nombre') !!}
        {!! Form::text('name', $categoria->name, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

@endsection

@section('footer')
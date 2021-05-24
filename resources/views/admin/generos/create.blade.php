@extends('adminlte::page')

@section('title', 'Cinema')

@section('content_header')
    <h1>Crear genero</h1>
@stop

@section('content')
    
<div class="card">
    <div class="card-body">

      {!! Form::open(['route'=> 'admin.generos.store','autocomplete'=>'off']) !!}

      <div class="form-group">

        {!! Form::label('name', 'Nombre') !!}
        {!! Form::text('name', null, ['class'=> 'form-control','placeholder'=>'Ingrese el nombre del genero']) !!}


        @error('name')
            <span class="text-danger">{{$message}}  </span>
        @enderror
      </div>

      {!! Form::submit('Crear genero', ['class' =>'btn btn-primary']) !!}

       {!! Form::close() !!}

        

    </div>

</div>
@stop


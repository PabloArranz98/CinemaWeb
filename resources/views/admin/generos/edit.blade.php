@extends('adminlte::page')

@section('title', 'Cinema')

@section('content_header')
    <h1>Editar genero</h1>
@stop

@section('content')

@if (session('info'))

<div class="alert alert-success">

    <strong>{{(session('info'))}}</strong>
</div>
    
@endif

<div class="card">
    <div class="card-body">

      {!! Form::model($genero,['route'=> ['admin.generos.update',$genero],'method'=> 'put']) !!}

      <div class="form-group">

        {!! Form::label('name', 'Nombre') !!}
        {!! Form::text('name', null, ['class'=> 'form-control','placeholder'=>'Ingrese el nombre del genero']) !!}


        @error('name')
            <span class="text-danger">{{$message}}  </span>
        @enderror
      </div>

      {!! Form::submit('Actualizar genero', ['class' =>'btn btn-primary']) !!}

       {!! Form::close() !!}

        

    </div>

</div>
@stop


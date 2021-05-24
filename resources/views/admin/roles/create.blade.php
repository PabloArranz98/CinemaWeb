@extends('adminlte::page')

@section('title', 'Cinema')

@section('content_header')
    <h1>Crear nuevo rol</h1>
@stop

@section('content')

@if (session('info'))
    
<div class="alert alert-success">
{{(session('info'))}}
</div>
@endif

   <div class="card">
       <div class="card-body">

        {!! Form::open(['route' =>'admin.roles.store']) !!}

       
        @include('admin.roles.partials.form')

        {!! Form::submit('Crear rol', ['class'=>'btn btn-primary']) !!}
        {!! Form::close() !!}
       </div>
   </div>
@stop


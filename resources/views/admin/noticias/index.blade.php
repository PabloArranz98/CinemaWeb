@extends('adminlte::page')

@section('title', 'Cinema')

@section('content_header')

    <a  class="btn btn-secondary btn-sm float-right" href="{{route('admin.noticias.create')}}">Añadir noticia<a>
    <h1>Listado de noticias</h1>
@stop

@section('content')
@if (session('info3'))

<div class="alert alert-success">

    <strong>{{(session('info3'))}}</strong>
</div>
    
@endif

    @livewire('admin.noticias-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop 
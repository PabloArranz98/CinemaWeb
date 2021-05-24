@extends('adminlte::page')

@section('title', 'Cinema')

@section('content_header')

    <a  class="btn btn-secondary btn-sm float-right" href="{{route('admin.series.create')}}">Añadir serie<a>
    <h1>Listado de series</h1>
@stop

@section('content')

@if (session('info2'))

<div class="alert alert-success">

    <strong>{{(session('info2'))}}</strong>
</div>
    
@endif
    @livewire('admin.series-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
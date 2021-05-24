@extends('adminlte::page')

@section('title', 'Cinema')

@section('content_header')

   
    <h1>Editar noticia</h1>
@stop

@section('content')

@if (session('info'))

<div class="alert alert-success">

    <strong>{{(session('info'))}}</strong>
</div>
    
@endif

<div class="card">
    <div class="card-body">

       

        {!! Form::model($noticia,['route'=>['admin.noticias.update',$noticia],'autocomplete'=>'off','files'=>true
        ,'method'=>'put']) !!}

        {!! Form::hidden('user_id', auth()->user()->id) !!}

       @include('admin.noticias.partials.form')

        {!! Form::submit('Actualizar noticia', ['class'=>'btn btn-primary']) !!}

        {!! Form::close() !!}

    </div>


</div>    

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">

    <style>
        .image-wrapper{
            position: relative;
            padding-bottom: 56.25%;
        }
 
        .image-wrapper img{
 
         position:absolute;
         object-fit: cover;
         width: 100%;
         height: 100%;
 
        }
       </style>
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
    <script>
         ClassicEditor
        .create( document.querySelector( '#extract' ) )
        .catch( error => {
            console.error( error );
        } );

        ClassicEditor
        .create( document.querySelector( '#noticia' ) )
        .catch( error => {
            console.error( error );
        } );

        //Cambiar imagen
        document.getElementById("file").addEventListener('change', cambiarImagen);

        function cambiarImagen(event){
            var file = event.target.files[0];

            var reader = new FileReader();
            reader.onload = (event) => {
                document.getElementById("picture").setAttribute('src', event.target.result); 
            };

            reader.readAsDataURL(file);
        }

        </script>

@stop


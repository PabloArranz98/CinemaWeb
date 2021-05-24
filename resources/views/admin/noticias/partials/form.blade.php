<div class="form-group">

    {!! Form::label('titulo','Título:' ) !!}
    {!! Form::text('titulo', null, ['class' =>'form-control','placeholder'=>'Ingrese el título de la noticia' ]) !!}

    @error('titulo')

    <small class="text-danger"> 
        {{$message}}
    </small>
        
    @enderror
</div>

<div class="form-group">
    {!! Form::label('extract', 'Extracto:') !!}
    {!! Form::textarea('extract', null, ['class'=>'form-control']) !!}

    @error('extract')

    <small class="text-danger"> 
        {{$message}}
    </small>
        
    @enderror
</div>


<div class="row mb-3">
    <div class="col">
       <div class="image-wrapper">
        
          
        @isset ($noticia->image)
        <img id="picture"  src="{{Storage::url($noticia->image->url)}}" alt="">

        @else
        <img id="picture"  src="https://cdn.pixabay.com/photo/2018/11/19/03/27/nature-3824498_960_720.jpg" alt="">
        
            
        @endisset
           
               
          

        </div>
    </div>
    


 <div class="col">
     <div class="form-group">
         {!! Form::label('file', 'Imagen de la noticia') !!}
         {!! Form::file('file', ['class'=>'form-control-file','accept'=>'image/*']) !!}
         
         @error('file')

         <span class="text-danger">{{$message}}</span>
             
         @enderror


     </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('noticia', 'Contenido de la noticia:') !!}
    {!! Form::textarea('noticia', null, ['class'=>'form-control']) !!}

    @error('noticia')

    <small class="text-danger"> 
        {{$message}}
    </small>
        
    @enderror
</div>
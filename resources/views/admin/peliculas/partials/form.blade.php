<div class="form-group">
    {!! Form::label('titulo', 'Título:') !!}

      {!! Form::text('titulo', null, ['class'=>'form-control','placeholder'=>'Ingrese el título de la película']) !!}
 
 @error('titulo')

 <small class="text-danger">
     {{$message}}
 </small>
     
 @enderror
 
     </div>

 <div class="div-group">
     {!! Form::label('genero_id', 'Genero') !!}
     {!! Form::select('genero_id', $generos, null, ['class'=>'form-control',]) !!}

     @error('genero_id')

     <small class="text-danger">
         {{$message}}
     </small>
         
     @enderror
     


 </div>

 <div class="form-group" >
     {!! Form::label('AñoDeEstreno', 'Año de estreno:') !!}

     {!! Form::number('AñoDeEstreno', null, ['class'=>'form-control','placeholder'=>'Ingrese el año de estreno de la película']) !!}

     
     @error('AñoDeEstreno')

     <small class="text-danger">
         {{$message}}
     </small>
         
     @enderror
     
 
 
 </div>

 <div class="form-group" >
     {!! Form::label('director', 'Director:') !!}
     {!! Form::text('director', null, ['class'=>'form-control','placeholder'=>'Ingrese el director de la película']) !!}

     
     @error('director')

     <small class="text-danger">
         {{$message}}
     </small>
         
     @enderror
     


 </div>

 <div class="form-group" >
     {!! Form::label('reparto', 'Reparto:') !!}
     {!! Form::textarea('reparto', null, ['class'=>'form-control']) !!}

     
     @error('reparto')

     <small class="text-danger">
         {{$message}}
     </small>
         
     @enderror
     


 </div>

 
      
    

     <div class="row mb-3">
        <div class="col">
           <div class="image-wrapper">
            
               @isset ($pelicula->image)
               <img id="picture"  src="{{Storage::url($pelicula->image->url)}}" alt="">
   
               @else
               <img id="picture"  src="https://cdn.pixabay.com/photo/2018/11/19/03/27/nature-3824498_960_720.jpg" alt="">
               
                   
               @endisset

            </div>
        </div>

     <div class="col">
         <div class="form-group">
             {!! Form::label('file', 'Imagen de la película') !!}
             {!! Form::file('file', ['class'=>'form-control-file','accept'=>'image/*']) !!}
             
             @error('file')

             <span class="text-danger">{{$message}}</span>
                 
             @enderror


         </div>

     </div>
 </div>

 <div class="form-group" >
     {!! Form::label('sinopsis', 'Sinopsis:') !!}
     {!! Form::textarea('sinopsis', null, ['class'=>'form-control']) !!}

     @error('sinopsis')

     <small class="text-danger">
         {{$message}}
     </small>
         
     @enderror
     
  </div>
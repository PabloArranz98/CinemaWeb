<div class="form-group">
    {!! Form::label('titulo', 'Título:') !!}

      {!! Form::text('titulo', null, ['class'=>'form-control','placeholder'=>'Ingrese el título de la serie']) !!}

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
     {!! Form::label('AñoDeEmision', 'Año de emisión:') !!}

     {!! Form::number('AñoDeEmision', null, ['class'=>'form-control','placeholder'=>'Ingrese el año de estreno de la serie']) !!}

     @error('AñoDeEmision')

     <small class="text-danger">
         {{$message}}
     </small>
         
     @enderror



 </div>
 <div class="form-group" >
         {!! Form::label('AñoDeFinalizacíon', 'Año de finalización:') !!}

         {!! Form::number('AñoDeFinalizacíon', null, ['class'=>'form-control','placeholder'=>'Ingrese el año de finalización de la serie']) !!}

         @error('AñoDeFinalizacíon')

         <small class="text-danger">
             {{$message}}
         </small>
             
         @enderror



     </div>


<div class="form-group" >
             {!! Form::label('temporadas', 'Temporadas:') !!}

             {!! Form::number('temporadas', null, ['class'=>'form-control','placeholder'=>'Ingrese el número de temporadas de la serie']) !!}

             @error('temporadas')

             <small class="text-danger">
                 {{$message}}
             </small>
                 
             @enderror




</div>

<div class="form-group" >
             {!! Form::label('director', 'Director:') !!}
             {!! Form::text('director', null, ['class'=>'form-control']) !!}

         </div>           
         @error('director')

         <small class="text-danger">
             {{$message}}
         </small>
             
         @enderror
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
        
           @isset ($series->image)
           <img id="picture"  src="{{Storage::url($series->image->url)}}" alt="">

           @else
           <img id="picture"  src="https://cdn.pixabay.com/photo/2018/11/19/03/27/nature-3824498_960_720.jpg" alt="">
           
               
           @endisset

        </div>
    </div>
 <div class="col">
     <div class="form-group">
         {!! Form::label('file', 'Imagen de la serie') !!}
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
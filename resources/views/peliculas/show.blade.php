<x-app-layout>

    
    <div class="container py-8">

        <h1 class="text-4xl font-bold text-gray-600">
            {{$pelicula->titulo}}
        </h1>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            

            <div class="lg:col-span-2">

                <figure>
                  
                    @if ($pelicula->image)
                    <img class="w-full h-80 object-cover object-center" src="{{Storage::url($pelicula->image->url)}}" alt="">
                    @else

                    <img class="w-full h-72 object-cover object-center" src="https://englishlive.ef.com/es-mx/blog/wp-content/uploads/sites/8/2014/11/Top_5_movies_to_help_you_learn_business_english.jpg" alt="">
                        
                    @endif


                </figure>

                <div class="text-base mt-4">
                    <p><strong> Año de estreno:</strong>   {{$pelicula->AñoDeEstreno}}</p>
                     <p><strong>Director: </strong> {{$pelicula->director}} </p>
                    <p> <strong> Casting:</strong>{!!$pelicula->reparto!!}</p>
                     <p> <strong>Sinopsis: </strong>{!!$pelicula->sinopsis!!}</p>

                   
                </div>


               
                
            
              
                
               
              
                <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mt-4">
                    <a href="{{route('register')}}">   Registrate para escribir una reseña</a>
                   </button>
                   
                 

               
                  
                
                
                <div class="mt-8">
                    
                <h1  class="text-2xl font-bold text-gray-600">En esta sección podrás escribir una reseña</h1> <br>
   
          
                        
        <form class="" autocomplete="off" action=" {{route('peliculas.store')}}" method="POST">

           

            @csrf

            @auth 
            {{ auth()->user()->name }}  

          
           
            @endauth



            <label class="block text-gray-700 text-lg font-bold mb-2" for="titulo">
                <strong>Titulo: {{$pelicula->titulo }}<strong> 
                <br>
                <input type="hidden" name="titulo" value="{{$pelicula->titulo}}">

            </label> 

            @error('titulo')
                <small>*{{$message}}</small>
            @enderror
            
            <br>

            <label class="block text-gray-700 text-lg font-bold mb-2" for="comentario">
                <strong>Comentario<strong>
                <br>
                <textarea class="rounded-lg resize-none w-full h-full" id="comentario" name="comentario" rows="5" > {{old('comentario')}}</textarea>
            </label>
            @error('comentario')
            <br>
           <small>*{{$message}}</small> 
            <br>
                
            @enderror

            <br>

            <label class="block text-gray-700 text-lg font-bold mb-2" for="nota">
                 <strong>Nota<strong>
                     <br>
                <input class="form-input" type="number" name="nota"  value="{{old('nota')}}">

            </label>

            @error('nota')
            <br>
           <small>*{{$message}}</small> 
            <br>
                
            @enderror
             <br>
          

            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">
               Enviar valoración
              </button>

        </form>

            </div>

           
  

            </div>
       

        <aside>

            <h1 class="text 2xl font-bold text-gray-600 mb-4">
                Más en {{$pelicula->genero->name }}
            </h1>

           <ul>
               
            @foreach ($similares as $similar)
                <li class="mb-4">
                    <a class="flex" href="{{route('peliculas.show', $similar)}}">
                        
                        @if ($similar->image)
                        <img class="w-36 h-20 object-cover object-center" src="{{Storage::url($similar->image->url)}}" alt="">
                        @else
                            
                        <img class="w-36 h-20 object-cover object-center" src="https://englishlive.ef.com/es-mx/blog/wp-content/uploads/sites/8/2014/11/Top_5_movies_to_help_you_learn_business_english.jpg" alt="">

                        @endif
                 
                        <span class="ml-2 text-gray-600">
                            {{$similar->titulo}}
                        </span>
                    </a>

                   
                </li>
            @endforeach
         </ul> 

        </aside>
    </div>
    </div>


 
</x-app-layout>


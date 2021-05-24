<x-app-layout>

    <div class="container py-8">

        <h1 class="text-4xl font-bold text-gray-600">
            {{$serie->titulo}}
        </h1>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            

            <div class="lg:col-span-2">

                <figure>
                    
                   
                    @if ($serie->image)
                    <img class="w-full h-80 object-cover object-center" src="{{Storage::url($serie->image->url)}}" alt="">
                    @else

                    <img class="w-full h-72 object-cover object-center"
                     src="https://cdn.pixabay.com/photo/2020/04/02/22/09/santorini-4996846_960_720.jpg" alt="">
                        
                    @endif
 




                </figure>

                <div class="text-base mt-4">

                    <p><strong> Año de emisión:</strong>   {{$serie->AñoDeEmision}}</p>
                    <p><strong>Año de finalización: </strong> {{$serie->AñoDeFinalizacíon}} </p>
                    <p> <strong> Temporadas:</strong>{{$serie->temporadas}}</p>
                    <p> <strong> Director:</strong>{{$serie->director}}</p>
        
                   <p> <strong> Reparto:</strong>{!!$serie->reparto!!}</p>
                    <p> <strong>Sinopsis: </strong>{!!$serie->reparto!!}</p>
                  
                </div>

                <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mt-4">
                    <a href="{{route('register')}}">   Registrate para escribir una reseña</a>
                   </button>
                   
                 

               
                    
                
                
                <div class="mt-8">
                    
                <h1  class="text-2xl font-bold text-gray-600">En esta sección podrás escribir una reseña</h1> <br>
   
          

        <form class="" autocomplete="off" action=" {{route('series.store')}}" method="POST">

           

            @csrf

            @auth 
            {{ auth()->user()->name }}  
           
            @endauth

            @error('name')
            <small>*{{$message}}</small>
        @enderror
              


            <label class="block text-gray-700 text-lg font-bold mb-2" for="titulo">
                <strong>Titulo: {{$serie->titulo }}<strong> 
                <br>
                <input type="hidden" name="titulo" value="{{$serie->titulo}}">

            </label> 

            @error('titulo')
                <small>*{{$message}}</small>
            @enderror
            
            <br>

            <label class="block text-gray-700 text-lg font-bold mb-2" for="comentario">
                <strong>Comentario<strong>
                <br>
                <textarea class="rounded-lg resize-none w-full h-full"  name="comentario" rows="5" > {{old('comentario')}}</textarea>
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
                Más en {{$serie->genero->name }}
            </h1>

           <ul>
               
            @foreach ($similares2 as $similar2)
                <li class="mb-4">
                    <a class="flex" href="{{route('series.show', $similar2)}}">
                       

                          @if ($similar2->image)
                        <img class="w-36 h-20 object-cover object-center" src="{{Storage::url($similar2->image->url)}}" alt="">
                        @else
                            
                        <img class="w-36 h-20 object-cover object-center" src="https://cdn.pixabay.com/photo/2020/04/02/22/09/santorini-4996846_960_720.jpg" alt="">

                        @endif


                 
                        <span class="ml-2 text-gray-600">
                            {{$similar2->titulo}}
                        </span>
                    </a>

                   
                </li>
            @endforeach
         </ul> 

        </aside>
    </div>
    </div>
</x-app-layout>
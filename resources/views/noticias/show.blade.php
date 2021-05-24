<x-app-layout>

    
    <div class="container py-8">

        <h1 class="text-4xl font-bold text-gray-600">
            {{$noticias->titulo}}
        </h1>
            <br>
        <h2> {!!$noticias->extract!!}</h2>
        <br>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            

            <div class="lg:col-span-2">

                <figure>
                  
                    @if ($noticias->image)
                    <img class="w-full h-80 object-cover object-center" src="{{Storage::url($noticias->image->url)}}" alt="">
                    @else

                    <img class="w-full h-72 object-cover object-center" src="https://phantom-elmundo.unidadeditorial.es/1bdd2b6bf26ee9d6f709d6f8bbbe4895/crop/130x0/1855x1150/resize/746/f/jpg/assets/multimedia/imagenes/2020/06/24/15930194372255.jpg" alt="">
                        
                    @endif


                </figure>

                <div class="text-base mt-4">
                    
                    {!!$noticias->noticia!!}

                    <br>
                    <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mt-10">
                        <a href="{{route('register')}}">   Registrate para escribir un comentario
                                                             y ver los comentarios de otros usuarios</a>
                       </button>

                                     
        <form class="mt-8" autocomplete="off" action=" {{route('noticias.store')}}" method="POST">

           

            @csrf

            @auth 
            {{ auth()->user()->name }}  

          
           
            @endauth



        
            
            <br>
            <label class="block text-gray-700 text-lg font-bold mb-2" for="name">
                <strong> {{$noticias->titulo }}<strong> 
                <br>
                <input type="hidden" name="titulo" value="{{$noticias->titulo}}">

                

            </label> 
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

           

            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">
               Publicar comentario
              </button>

        </form>

        

                   
                </div>

            </div>
               
                
               

        <aside>

            <h1 class="text 2xl font-bold text-gray-600 mb-4">
                Más en noticias
            </h1>

           <ul>
               
            @foreach ($similares3 as $similar3)
                <li class="mb-4">
                    <a class="flex" href="{{route('noticias.show', $similar3)}}">
                        
                        @if ($similar3->image)
                        <img class="w-36 h-20 object-cover object-center" src="{{Storage::url($similar3->image->url)}}" alt="">
                        @else
                            
                        <img class="w-36 h-20 object-cover object-center" src="https://phantom-elmundo.unidadeditorial.es/1bdd2b6bf26ee9d6f709d6f8bbbe4895/crop/130x0/1855x1150/resize/746/f/jpg/assets/multimedia/imagenes/2020/06/24/15930194372255.jpg" alt="">

                        @endif
                 
                        <span class="ml-2 text-gray-600">
                            {{$similar3->titulo}}
                        </span>
                    </a>

                   
                </li>
            @endforeach
         </ul> 

        </aside>
    </div>
    </div>


 
</x-app-layout>


          

         

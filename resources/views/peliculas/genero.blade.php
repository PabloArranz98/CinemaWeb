<x-app-layout>

    <div class=" max-w-5xl mx-auto px-2 sm:px-6 lg:px-8 py-4">
        <h1 class="uppercase text-center text-3xl font-bold">Genero:{{$genero->name}}</h1>

        @foreach ($pelicula as $peliculas)
            <x-card-pelicula :peliculas ="$peliculas"/>
        <article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden">

           
                
            @if ($peliculas->image)
            <img class="w-full h-72 object-cover object-center" src="{{Storage::url($peliculas->image->url)}}" alt="">
                
            @else

            <img class="w-full h-72 object-cover object-center" src="https://englishlive.ef.com/es-mx/blog/wp-content/uploads/sites/8/2014/11/Top_5_movies_to_help_you_learn_business_english.jpg" alt="">
                
            @endif
           
           <div class="px-6 py-8">

            <h1 class=" font-bold text-xl mb-2">
                <a href="{{route('peliculas.show',$peliculas)}}">{{$peliculas->titulo}}</a>

            </h1>
               
          </div> 

        </article>
            
        @endforeach

        <div class="mt-4">
            {{$pelicula->links()}}
        </div>

    </div>

   
</x-app-layout>
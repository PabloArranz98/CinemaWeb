<x-app-layout>

    <div class="container py-10">

        <h1 class="text-4xl font-bold text-gray-600">Listado de peliculas</h1>

        
         
      @livewire('options')

      @section('css')

      <link rel="stylesheet" href="{{asset('vendor/jquery-ui-1.12.1/jquery-ui.min.css')}}">
          
      @endsection

      
     
      

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            @foreach ($peliculas as $pelicula)
            <article class="w-full h-80 bg-cover bg-center @if($loop->first) md:col-span-2
                 @endif" style="background-image:url(@if($pelicula->image) {{Storage::url($pelicula->image->url)}} 
                 @else https://englishlive.ef.com/es-mx/blog/wp-content/uploads/sites/8/2014/
                 11/Top_5_movies_to_help_you_learn_business_english.jpg
                  @endif)">
         
                <div class="w-full h-full px-8 flex flex-col justify-center">

                    
                    <h1 class="text-4xl text-white leading-8 font-bold">
                        <a href="{{route('peliculas.show', $pelicula)}}">
                            {{$pelicula->titulo}}
                        </a>

                    </h1>

            
                </div>

            </article>
                
            @endforeach
        </div>
       <div class="mt-4">
           {{$peliculas->links()}}
    </div> 
    </div>

   



</x-app-layout>
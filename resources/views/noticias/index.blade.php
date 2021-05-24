<x-app-layout>

    <div class="container py-10">

        <h1 class="text-4xl font-bold text-gray-600">Listado de noticias</h1>

        
         
      @livewire('options')

      @section('css')

      <link rel="stylesheet" href="{{asset('vendor/jquery-ui-1.12.1/jquery-ui.min.css')}}">
          
      @endsection

      
     
      

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            @foreach ($noticias as $noticia)
            <article class="w-full h-80 bg-cover bg-center @if($loop->first) md:col-span-2 @endif" style="background-image:url(@if($noticia->image) {{Storage::url($noticia->image->url)}} @else https://phantom-elmundo.unidadeditorial.es/1bdd2b6bf26ee9d6f709d6f8bbbe4895/crop/130x0/1855x1150/resize/746/f/jpg/assets/multimedia/imagenes/2020/06/24/15930194372255.jpg @endif)">
         
                <div class="w-full h-full px-8 flex flex-col justify-center">

                    
                    <h1 class="text-4xl text-white leading-8 font-bold">
                        <a href="{{route('noticias.show', $noticia)}}">
                            {{$noticia->titulo}}
                        </a>

                    </h1>

            
                </div>

            </article>
                
            @endforeach
        </div>
       <div class="mt-4">
           {{$noticias->links()}}
    </div> 
    </div>

   



</x-app-layout>
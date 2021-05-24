<x-app-layout>

    <div class=" max-w-5xl mx-auto px-2 sm:px-6 lg:px-8 py-4">
        <h1 class="uppercase text-center text-3xl font-bold">Genero:{{$Generos->name}}</h1>

        @foreach ($series as $serie)

        <article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden">

            @if ($serie->image)
            <img class="w-full h-72 object-cover object-center" src="{{Storage::url($serie->image->url)}}" alt="">
                
            @else

            <img class="w-full h-72 object-cover object-center" src="https://cdn.pixabay.com/photo/2020/04/02/22/09/santorini-4996846_960_720.jpg" alt="">
                
            @endif

            
           <div class="px-6 py-8">

            <h1 class=" font-bold text-xl mb-2">
                <a href="{{route('series.show',$serie)}}">{{$serie->titulo}}</a>

            </h1>
               
          </div> 

        </article>
            
        @endforeach

        <div class="mt-4">
            {{$series->links()}}
        </div>

    </div>

   
</x-app-layout>
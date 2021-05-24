<x-app-layout>
  
    <div class="container py-10">
        <h1 class="text-4xl font-bold text-gray-600">Listado de series</h1>
         
        @livewire('option2')

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            @foreach ($series as $serie)
            <article class="w-full h-80 bg-cover bg-center @if($loop->first) md:col-span-2 @endif" style="background-image:url(@if($serie->image) {{Storage::url($serie->image->url)}} @else https://cdn.pixabay.com/photo/2020/04/02/22/09/santorini-4996846_960_720.jpg @endif)")>

              
         
                <div class="w-full h-full px-8 flex flex-col justify-center">
                    <h1 class="text-4xl text-white leading-8 font-bold">
                    <a href="{{route('series.show', $serie)}}">
                        {{$serie->titulo}}
                    </a>
                    </h1>
                   
                </div>

            </article>
                
            @endforeach
        </div>
       <div class="mt-4">
           {{$series->links()}}
    </div> 
    </div>
   




</x-app-layout>
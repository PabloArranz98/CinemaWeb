
    <x-app-layout>

       
        
        <h1 class="text-4xl  leading-8 font-bold mt-4 ml-8">Bienvenido al listado de valoraciones de peliculas</h1>
        
        
      
        <div class="w-full h-full px-8 flex flex-col justify-center mt-10">
            
            
       
            @foreach ($valoracion as $valoraciones)  
           
       
           <td> <h1 class="text-4xl  leading-8 font-bold"><a href="{{route('peliculas.criticas',$valoraciones->id)}}"> 
                 {{$valoraciones->titulo}}</h1></a><p class="text-xl mb-4 bg-green-400 p-2">
            <strong>Escrito por:</strong> {{$valoraciones->name}} <br>
             <strong>Fecha:</strong>  {{ date('Y-m-d H:i:s') }}</p> </td> 
                       
            
            @endforeach 

        </div> 
        </div>
        {{$valoracion->links()}}
        
     
        
    </x-app-layout>

  
   

                    
       

    

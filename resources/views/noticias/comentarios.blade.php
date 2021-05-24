
<x-app-layout>

   

<div class="grid lg:grid-cols-2  mt-8 ml-8">
    

    @foreach ($comentario as $comentarios)

    <div class="mt-8 ml-10">
        {{$comentarios->titulo}}
        <br>
        <strong>Fecha:</strong>  {{ date('Y-m-d H:i:s') }}

        <br>
        {{$comentarios->name}}
        
        </div>
        
    
    
<p class="text-xl mb-4 ml-2 font-bold"><textarea disabled cols="50" rows="5"
 class="rounded-lg resize-none w-full h-full " style="height:400x "> {{$comentarios->comentario}}
</textarea> </label>
</p>
@endforeach

{{$comentario->links()}}


</x-app-layout>
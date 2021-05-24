<x-app-layout>

    <h1 class="text-4xl font-bold text-gray-600 mt-8 ml-4">Dejanos un mensaje</h1>

   

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
    <form class="mt-8" autocomplete="off" action="{{route('contactanos.store')}}"  method="POST">

        @csrf

    <label class="block text-gray-700 text-lg font-bold mb-2 ml-4">
        Nombre:
        <br>
        <input type="text" name="name" >
    </label>
    <br>

    @error('name')
        <p><strong>{{$message}}</strong></p>
    @enderror

    <label class="block text-gray-700 text-lg font-bold mb-2 ml-4">
        Correo:
        <br>
        <input type="text" name="correo" class="block text-gray-700 text-lg font-bold mb-2">
    </label>
    <br>
      @error('correo')
        <p><strong>{{$message}}</strong></p>
     @enderror


    <label class="block text-gray-700 text-lg font-bold mb-2 ml-4" for="comentario">
        <strong>Comentario<strong>
        <br>
        <textarea class="rounded-lg resize-none w-full h-full" id="comentario" name="comentario" rows="5" > </textarea>
    </label>
    <br>
    @error('comentario')
    <p><strong>{{$message}}</strong></p>
     @enderror

     <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mt-4 ml-4">
        <a href="{{route('register')}}">   Registrate para escribir una reseña</a>
       </button>

       <br>

    <button class="ml-4 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mt-10" type="submit">Enviar mensaje</button>

    </form>

    @if (session('info'))

    <script>

    alert("{{session('info')}}")
     
    </script>
    
       @endif

    </div>

</x-app-layout>
<x-app-layout>


    
    <title>Valoracion</title>
</head>
<body >
    
    
      <h1 class="text-4xl  leading-8 font-bold ml-10 mt-4 ">Reseña: {{$valorac->titulo}}<h1>

        <h2 class="text-2xl ml-10 mt-4 font-bold">Comentario:</h2>
       
      
        <div class="grid lg:grid-cols-2  mt-4 ml-8">

     <p class="text-xl mb-4 ml-2 font-bold"><textarea disabled cols="50" rows="5" class="rounded-lg
       resize-none w-full h-full " style="height:400x "> {{$valorac->comentario}}</textarea> </label>
       Nota: {{$valorac->nota}} </p>

       <div class="ml-40 border-4 border-green-400 mt-40 divide-y divide-light-blue-400">
       
       <h1 class="text-2xl font-bold border-4 border-green-400  ">Otras webs con reseñas de series</h1>


  <nav>

    

    <ul class="ml-2 ">

      <li class=" mt-5  font-bold  " ><a href="https://www.imdb.com/">IMDB</a></li>

      <hr>

      <li class="mt-5  font-bold"><a href="https://www.filmaffinity.com/es/topgen.php?genre=TV
        _SE&country=&fromyear=&toyear=&nodoc">Filmaffinity</a></li>

      <hr>
      <li class="mt-5 font-bold"><a href="https://www.espinof.com/tag/criticas-de-series">Espinof</a></li>

      <hr>
      <li class="mt-5  font-bold"><a href="https://www.sensacine.com/series/">SensaCine</a></li>
      <hr>
     

    </ul>

  </nav>
       </div> 
  
      </div>
    <div class="mt-20 ml-10 font-bold">
        <a href={{route("series.valoracion")}}>Volver al listado de valoraciones.</a>
    </div>

</div>
</x-app-layout>
<div class="card">

    <div class="card-header">
        <input wire:model="search" class="form-control" placeholder="Ingrese el título de una serie">
    </div>

    @if ($series->count())
        
    

    <div class="card-body">

        <table class="table table-striped">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th colspan="2"></th>
                </tr>

            </thead>

            <tbody>
                @foreach ($series as $serie)

                <tr>
                    <td>{{$serie->id}}</td>
                    <td>{{$serie->titulo}}</td>
                    <td width="10px">
                        <a class="btn btn-primary btn-sm" href="{{route('admin.series.edit',$serie)}}">Editar</a>
                    </td>
                    <td width="10px">
                        <form action="{{route('admin.series.destroy',$serie)}}" method="POST">
                          @csrf
                          @method('DELETE')      
                          <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
                    
                @endforeach
            </tbody>
    </div>

        <div class="card-footer">

        {{$series->links()}}
   
       </div>

    @else
      <div class="card-body">
    <strong>No hay ningún registro</strong>
    </div>
    @endif


</div>
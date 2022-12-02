@extends('Plantilla')

@section('contenido')




@if (session()->has('Confirmacion'))
      <?php $titu = session()->get('txtTitulo')?>

         <div class="alert alert-warning" role="alert">
              Se guardo correctamente
           </div>

    @endif 
    
@if (session()->has('Actualizar'))
        {!! "<script>Swal.fire(
            'Correcto!',
            ' Se actualizo de manera correcta!',
            'OK'
      )     </script>"!!}

    @endif 



@if (session()->has('Eliminar'))
        {!! "<script>Swal.fire(
            'Correcto!',
            'Se elimino de manera correcta!',
            'OK'
      )     </script>"!!}

    @endif 


<div>   
    <h1 class="display-1 mt-4 mb-4 text-center">Consulta LIBRO</h1>
    
    <div class="container col-md-6 mb-5">
    
    @foreach ($ConsultaLibros as $consulta)
 
             <div class="card text-center mb-4">
                  <div class="card-header">
                    <h5 class="text-primary text-center"> Libro--{{$consulta->titulo}} </h5>
                  </div>

                    <div class="card-body">
                        <h5 class="card-title">Numero de paginas---{{$consulta->paginas}}</h5>
                        <h5 class="card-title">Libros publicados---{{$consulta->editorial}}</h5>
                    <p class="card-text"></p>
                                            
                    </div>

                <div class="card-footer text-muted">

                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalActualizarLibro{{$consulta->idLibro}}">
                             Actualizar
                    </button>

                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEliminarAutor">
                             Eliminar
                    </button>
            </div>
            @include('modalActualizarLibro')
 @endforeach
   </div>
</div>




 @stop
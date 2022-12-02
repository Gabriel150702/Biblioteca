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
    <h1 class="display-1 mt-4 mb-4 text-center">Consulta Autor</h1>
    
    <div class="container col-md-6 mb-5">
    
    @foreach ($ConsultaRec as $consulta)
 
             <div class="card text-center mb-4">
                  <div class="card-header">
                    <h5 class="text-primary text-center"> Autor--{{$consulta->Nombre}} </h5>
                  </div>

                    <div class="card-body">
                        
                        <h5 class="card-title">Fecha de Nacimeinto---{{$consulta->fecha}}</h5>
                        <h5 class="card-title">Libros publicados---{{$consulta->libros}}</h5>
                    <p class="card-text"></p>
                                            
                    </div>

                <div class="card-footer text-muted">

                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalActualizarAutor{{$consulta->idAutor}}">
                             Actualizar
                    </button>

                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEliminarAutor{{$consulta->idAutor}}">
                             Eliminar
                    </button>
            </div>
            @include('modalActualizarAutor')
            @include('modalEliminarAutor')
 @endforeach
   </div>
</div>




 @stop
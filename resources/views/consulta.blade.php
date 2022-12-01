@extends('Plantilla')

@section('contenido')

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
    

 
             <div class="card text-center">
                  <div class="card-header">
                    <h5 class="text-primary text-center"> </h5>
                  </div>

                    <div class="card-body">
                        <h5 class="card-title"></h5>
                    <p class="card-text"></p>
                                            
                    </div>

                <div class="card-footer text-muted">

                    <a href="{{route" class="btn btn-warning">Actualizar</a>
                    <a href="" class="btn btn-danger">Eliminar</a>
                </div>
            </div>

    </div>
</div>




 @stop
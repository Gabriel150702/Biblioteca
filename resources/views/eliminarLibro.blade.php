@extends('Plantilla')

@section('contenido')

    

<div class="container mt-4 col-md-8">


      <h1 class="display-4 text-center mb-4">Eliminar Libro</h1>

    
      <div class="alert alert-warning" role="alert">
  ¿Seguro que quieres eliminar?
</div>

      <div class="card text-center mb-4">
      <div class="card-header">
      <div class="card-body">
        <h5  class="card-title"></h5>
        <h5  class="card-title"></h5>


        
          
        </div>

  <div class="card-body">
      <!-- @method('PUT') -->

      
         
        
 
  
    
    </div>

    <form class="m-4" method="post" action="">
        @csrf
        <!-- {!!method_field('PUT')!!} -->

             <div class="card-footer ">
              <button type="submit"  class="btn btn-primary">YES</button>
              <a href="" class="btn btn-primary">NO</button></a>
  </form>
    
              </div>
  
      </div>
</div>


    



   


  

 @stop
 

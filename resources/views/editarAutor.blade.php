@extends('Plantilla')

@section('contenido')

    

<div class="container mt-4 col-md-8">

      <h1 class="display-4 text-center mb-4">Actualizar Autor</h1>
       @if ($errors->any())
         
         @foreach ($errors->all() as $error)


            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>  {{ $error }} </strong> 
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
         @endforeach

      @endif

      <div class="card text-center mb-4">

        <div class="card-header">
          Actualizar Autor
        </div>

  <div class="card-body">
    <form class="m-4" method="post" action="">
        @csrf
      <!-- @method('PUT') -->

         {!!method_field('PUT')!!}
         
         <div class="row mb-3">
            <label  class="col-sm-2 col-form-label fw-bold ">Nombre Completo</label>
           <div class="col-sm-10">
                  <input type="text" class="form-control" name="txtNom" value="{{old('txtNom')}}" >
                  <p class="fst-Italic">
                  {{ $errors->first('txtNom') }}
                  </p>
            </div> 
        </div>
  
           <div class="row mb-3">
             <label  class="col-sm-2 col-form-label fw-bold">Fecha de nacimiento</label>
             <div class="col-sm-10">
                   <input type="date" class="form-control" name="txtFecha" value="{{old('txtFecha')}}">
                   {{ $errors->first('txtFecha') }}
               </div>
             </div>

             <div class="row mb-3">
            <label  class="col-sm-2 col-form-label fw-bold ">Numero de libros publicados</label>
           <div class="col-sm-10">
                  <input type="number" class="form-control" name="txtpubli" value="{{old('txtpubli')}}" >
                  <p class="fst-Italic">
                  {{ $errors->first('txtpubli') }}
                  </p>
            </div> 
        </div>

    
    </div>

             <div class="card-footer ">
              <button type="submit" class="btn btn-primary">Actualizar</button>
  </form>
    
              </div>
  
      </div>
</div>


    
  

 @stop
 

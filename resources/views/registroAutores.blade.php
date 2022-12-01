@extends('Plantilla')

@section('contenido')

 @if (session()->has('Confirmacion'))
      <?php $titu = session()->get('txtTitulo')?>

         <div class="alert alert-warning" role="alert">
              Se guardo correctamente
           </div>

    @endif 


<body>
    

<div class="container card text-center">
  <div class="card-header">
  </div>
 
  <div class="card-body ">
  <form class="m-4" method="post" action="GuardarAutor">
        @csrf 
         
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
              <button type="submit" class="btn btn-primary">Guardar</button>
  </form>
    
  </div>
  
</div>
    
</body>
</html>
@stop
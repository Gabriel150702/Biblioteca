@extends('Plantilla')

@section('contenido')


<body>
    

<div class="container card text-center">
  <div class="card-header">
  </div>
  <div class="card-body ">
  <form class="m-4" method="post" action="Guardarlibro">
        @csrf 
         
        <div class="row mb-3">
            <label  class="col-sm-2 col-form-label fw-bold ">ISBN</label>
           <div class="col-sm-10">
                  <input type="text" class="form-control" name="txtISBN" value="{{old('txtISBN')}}" >
                  <p class="fst-Italic">
                  {{ $errors->first('txtISBN') }}
                  </p>
            </div> 
        </div>
  
           <div class="row mb-3">
             <label  class="col-sm-2 col-form-label fw-bold">Titulo</label>
             <div class="col-sm-10">
                   <input type="text" class="form-control" name="txtTitulo" value="{{old('txtTitulo')}}">
                   {{ $errors->first('txtTitulo') }}
               </div>
             </div>

             <div class="row mb-3">
            <label  class="col-sm-2 col-form-label fw-bold ">Autor</label>
           <div class="col-sm-10">
                  <input type="text" class="form-control" name="txtAutor" value="{{old('txtAutor')}}" >
                  <p class="fst-Italic">
                  {{ $errors->first('txtAutor') }}
                  </p>
            </div> 
        </div>

        <div class="row mb-3">
            <label  class="col-sm-2 col-form-label fw-bold ">Paginas</label>
           <div class="col-sm-10">
                  <input type="number" class="form-control" name="txtPaginas" value="{{old('txtPaginas')}}" >
                  <p class="fst-Italic">
                  {{ $errors->first('txtPaginas') }}
                  </p>
            </div> 
        </div>

        <div class="row mb-3">
            <label  class="col-sm-2 col-form-label fw-bold ">Editorial</label>
           <div class="col-sm-10">
                  <input type="text" class="form-control" name="txtEditorial" value="{{old('txtEditorial')}}" >
                  <p class="fst-Italic">
                  {{ $errors->first('txtEditorial') }}
                  </p>
            </div> 
        </div>

        <div class="row mb-3">
            <label  class="col-sm-2 col-form-label fw-bold ">Correo Electronico del editorial </label>
           <div class="col-sm-10">
                  <input type="text" class="form-control" name="txtCorreo" value="{{old('txtCorreo')}}" >
                  <p class="fst-Italic">
                  {{ $errors->first('txtCorreo') }}
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
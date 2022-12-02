<div class="modal fade" id="modalActualizarLibro" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalActualizarLibro" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">ACTUALIZAR AUTOR</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form class="m-4" method="post" action="{{route('autor.update',$consulta->idLibro)}}">
      @csrf 
          {!!method_field('PUT')!!}
          <div class="row mb-3">
            <label  class="col-sm-2 col-form-label fw-bold ">ISBN</label>
           <div class="col-sm-10">
                  <input type="text" class="form-control" name="txtISBN" value="{{$consulta->isbn}}" >
                  <p class="fst-Italic">
                  {{ $errors->first('txtISBN') }}
                  </p>
            </div> 
        </div>
  
           <div class="row mb-3">
             
           
           <label  class="col-sm-2 col-form-label fw-bold">Titulo</label>
             <div class="col-sm-10">
                   <input type="text" class="form-control" name="txtTitulo" value="{{$consulta->titulo}}">
                   {{ $errors->first('txtTitulo') }}
               </div>
             </div>
                <div class="form-floating mb-3">
                <select class="form-select" aria-label="Default select example" name="txtAutor" >
                    <option selected disabled="disabled">Seleccione un autor...</option>
        
                </select>
            </div>

             

        <div class="row mb-3">
            <label  class="col-sm-2 col-form-label fw-bold ">Paginas</label>
           <div class="col-sm-10">
                  <input type="number" class="form-control" name="txtPaginas" value="{{$consulta->paginas}}" >
                  <p class="fst-Italic">
                  {{ $errors->first('txtPaginas') }}
                  </p>
            </div> 
        </div>

        <div class="row mb-3">
            <label  class="col-sm-2 col-form-label fw-bold ">Editorial</label>
           <div class="col-sm-10">
                  <input type="text" class="form-control" name="txtEditorial" value="{{$consulta->editorial}}" >
                  <p class="fst-Italic">
                  {{ $errors->first('txtEditorial') }}
                  </p>
            </div> 
        </div>

        <div class="row mb-3">
            <label  class="col-sm-2 col-form-label fw-bold ">Correo Electronico del editorial </label>
           <div class="col-sm-10">
                  <input type="text" class="form-control" name="txtCorreo" value="{{$consulta->correo}}" >
                  <p class="fst-Italic">
                  {{ $errors->first('txtCorreo') }}
                  </p>
            </div> 
        </div>

      <div class="modal-footer">
        <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">CERRAR</button>
        <button type="submit" class="btn btn-primary">ACTUALIZAR</button>
        </form>  
      </div>
    </div>
  </div>
</div>


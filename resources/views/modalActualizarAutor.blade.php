<!-- Modal -->







<div class="modal fade" id="modalActualizarAutor{{$consulta->idAutor}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalActualizarAutor" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">ACTUALIZAR AUTOR</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form class="m-4" method="post" action="{{route('autor.update',$consulta->idAutor)}}">
      @csrf 
          {!!method_field('PUT')!!}
      <div class="row mb-3">
            <label  class="col-sm-2 col-form-label fw-bold ">Nombre Completo</label>
           <div class="col-sm-10">
                  <input type="text" class="form-control" name="txtNom" value="{{$consulta->Nombre}}" >
                  <p class="fst-Italic">
                  {{ $errors->first('txtNom') }}
                  </p>
            </div> 
        </div>
  
           <div class="row mb-3">
             <label  class="col-sm-2 col-form-label fw-bold">Fecha de nacimiento</label>
             <div class="col-sm-10">
                   <input type="date" class="form-control" name="txtFecha" value="{{$consulta->fecha}}">
                   {{ $errors->first('txtFecha') }}
               </div>
             </div>

             <div class="row mb-3">
            <label  class="col-sm-2 col-form-label fw-bold ">Numero de libros publicados</label>
           <div class="col-sm-10">
                  <input type="number" class="form-control" name="txtpubli" value="{{$consulta->libros}}" >
                  <p class="fst-Italic">
                  {{ $errors->first('txtpubli') }}
                  </p>
            </div> 
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



  <!-- Modal -->
  <div class="modal fade" id="editar{{ $item->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">

        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel"> Actualizar Recuerdo </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>{{-- cierra header --}}

        <div class="modal-body">
            <form method="POST" action="/recuerdo/{{ $item->id }}/confirm">
                @csrf 
      
                  <div class="mb-3">
                    <label  class="form-label">Titulo: </label>
                    <input type="text" name="txtTitulo" class="form-control" value= "{{ $item->titulo }} " >
                    <p class="text-danger fst-italic"> {{$errors->first('txtTitulo')}} </p>
                  </div>
      
                  <div class="mb-3">
                      <label  class="form-label">Recuerdo: </label>
                      <input type="text"  name="txtRecuerdo" class="form-control" value= "{{ $item->recuerdo }} ">
                      <p class="text-danger fst-italic"> {{$errors->first('txtRecuerdo')}} </p>
                    </div>
               
          </div>
      
          <div class="card-footer text-body-secondary">
 
        </div>{{-- cierra body --}}

        <div class="modal-footer">
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-outline-warning">Editar Recuerdo</button>
            </div>
        </form>
         
        </div> {{-- cierra footer --}}

      </div>
    </div>
  </div>
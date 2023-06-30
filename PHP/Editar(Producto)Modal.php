<!-- Modal -->
<div class="modal fade" id="editarModal" tabindex="-1" aria-labelledby="editarModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editarModalLabel">Editar</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="./PHP/Actualizar(Producto).php" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id" id="id">

          <div class="mb-3">
            <label for="NombreProducto" class="form-label">Nombre Producto:</label>
            <input type="text" name="NombreProducto" id="NombreProducto" class="form-control" maxlength="30" required>
          </div>
          
          <div class="mb-3">
            <label for="CantidadDisponible" class="form-label">Cantidad Disponible:</label>
            <input type="tel" name="CantidadDisponible" id="CantidadDisponible" class="form-control" maxlength="5" required>
          </div>

          <div class="mb-3">
            <label for="PrecioAntes" class="form-label">Precio Antes:</label>
            <input type="tel" name="PrecioAntes" id="PrecioAntes" class="form-control" maxlength="10" required>
          </div>

          <div class="mb-3">
            <label for="PrecioActual" class="form-label">Precio Actual:</label>
            <input type="tel" name="PrecioActual" id="PrecioActual" class="form-control" maxlength="10" required>
          </div>

          <div class="mb-3">
            <label for="Descripcion" class="form-label">Descripción:</label>
            <textarea name="Descripcion" id="Descripcion" cols="20" rows="10" class="form-control"></textarea>
          </div>

          <div class="">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i> Guardar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

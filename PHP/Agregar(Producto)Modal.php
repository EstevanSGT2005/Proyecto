<!-- Modal -->
<div class="modal fade" id="agregarModal" tabindex="-1" aria-labelledby="agregarModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="agregarModalLabel">Registrar</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="./PHP/Guardar(Producto).php" method="post" enctype="multipart/form-data">
          
          <div class="mb-3">
            <label for="NombreProducto" class="form-label">Nombre Producto:</label>
            <input type="text" name="NombreProducto" id="NombreProducto" class="form-control" maxlength="15" required>
          </div>

          <div class="mb-3">
            <label for="Catalogo" class="form-label">Catalogo:</label>
            <select name="Catalogo" id="Catalogo" class="form-select">
              <option value="0">Escoge una opción</option>
              <?php
              while ($rowCatalogo = $Catalogo -> fetch_assoc()){?>
              <option value="<?php echo $rowCatalogo["idCatalogo"]; ?>"><?= $rowCatalogo["Catalogo"]?></option>
              <?php } ?>
            </select>
          </div>

          <div class="mb-3">
            <label for="Subcatalogo" class="form-label">Subcatalogo:</label>
            <select name="Subcatalogo" id="Subcatalogo" class="form-select">
              <option value="0">Escoge una opción</option>
              <?php
              while ($rowSubcatalogo = $Subcatalogo -> fetch_assoc()){?>
              <option value="<?php echo $rowSubcatalogo["idSubcatalogo"]; ?>"><?= $rowSubcatalogo["Subcatalogo"]?></option>
              <?php } ?>
            </select>
          </div>

          <div class="mb-3">
            <label for="Marca" class="form-label">Marca:</label>
            <select name="Marca" id="Marca" class="form-select">
              <option value="0">Escoge una opción</option>
              <?php
              while ($rowMarca = $Marca -> fetch_assoc()){?>
              <option value="<?php echo $rowMarca["idMarca"]; ?>"><?= $rowMarca["Marca"]?></option>
              <?php } ?>
            </select>
          </div>

          <div class="mb-3">
            <label for="CantidadDisponible" class="form-label">Cantidad Disponible:</label>
            <input type="tel" name="CantidadDisponible" id="CantidadDisponible" class="form-control" maxlength="5" required>
          </div>

          <div class="mb-3">
            <label for="PrecioAntes" class="form-label">PrecioAntes:</label>
            <input type="tel" name="PrecioAntes" id="PrecioAntes" class="form-control" maxlength="10" required>
          </div>

          <div class="mb-3">
            <label for="PrecioActual" class="form-label">PrecioActual:</label>
            <input type="tel" name="PrecioActual" id="PrecioActual" class="form-control" maxlength="10" required>
          </div>

          <div class="mb-3">
            <label for="PorcentajeDescuento" class="form-label">Porcentaje Descuento:</label>
            <select name="PorcentajeDescuento" id="PorcentajeDescuento" class="form-select">
              <option value="0">Escoge una opción</option>
              <?php
              while ($rowPorcentajeDescuento = $PorcentajeDescuento -> fetch_assoc()){?>
              <option value="<?php echo $rowPorcentajeDescuento["idPorcentajeDescuento"]; ?>"><?= $rowPorcentajeDescuento["PorcentajeDescuento"]?></option>
              <?php } ?>
            </select>
          </div>

          <div class="mb-3">
            <label for="Descripcion" class="form-label">Descripcion:</label>
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

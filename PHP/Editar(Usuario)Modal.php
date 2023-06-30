<!-- Modal -->
<div class="modal fade" id="editarModal" tabindex="-1" aria-labelledby="editarModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editarModalLabel">Editar Registro</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

       <form action="./PHP/Actualizar(Usuario).php" method="post" enctype="multipart/form-data">

       <input type="hidden" name="id" id="id">

        <div class="mb-3">

            <label for="PrimerNombre" class="form-label">Primer Nombre:</label>

            <input type="text" name="PrimerNombre" id="PrimerNombre" class="form-control" maxlength="15" required>

        </div>

        <div class="mb-3">

            <label for="SegundoNombre" class="form-label">Segundo Nombre:</label>

            <input type="text" name="SegundoNombre" id="SegundoNombre" class="form-control" maxlength="15">
            
        </div>

        <div class="mb-3">

            <label for="PrimerApellido" class="form-label">Primer Apellido:</label>

            <input type="text" name="PrimerApellido" id="PrimerApellido" class="form-control" maxlength="15" required>

        </div>

        <div class="mb-3">

            <label for="SegundoApellido" class="form-label">Segundo Apellido:</label>

            <input type="text" name="SegundoApellido" id="SegundoApellido" class="form-control" maxlength="15" required>

        </div>

        <div class="mb-3">

            <label for="Nombre" class="form-label">Tipo Documento:</label>

            <select name="TipoDocumento" id="TipoDocumento" class="form-select">

                <option value="0">Escoge una opción</option>

                <option value="1">CC</option>

                <option value="2">TI</option>

                <option value="3">CE</option>

                <option value="4">CI</option>

                <option value="5">DNI</option>

            </select>

        </div>

        <div class="mb-3">

            <label for="NumeroDocumeto" class="form-label">Numero Documento:</label>

            <input type="tel" name="NumeroDocumento" id="NumeroDocumento" class="form-control" maxlength="10" required>

        </div>

        <div class="mb-3">

            <label for="FechaNacimiento" class="form-label">Fecha Nacimiento:</label>

            <input type="date" name="FechaNacimiento" id="FechaNacimiento" class="form-control" max="2006-12-31" required>

        </div>

        <div class="mb-3">

            <label for="Nombre" class="form-label">Genero:</label>

            <select name="Genero" id="Genero" class="form-select">              

                <option value="0">Escoge una opción</option>

                <option value="1">Femenino</option>

                <option value="2">Masculino</option>

                <option value="3">No Binario</option>

            </select>

        </div>

        <div class="mb-3">

            <label for="CorreElectronico" class="form-label">Correo Electrónico:</label>

            <input type="text" name="CorreoElectronico" id="CorreoElectronico" class="form-control" required>

        </div>

        <div class="mb-3">

            <label for="NumeroCelular" class="form-label">Número Celular:</label>

            <input type="text" name="NumeroCelular" id="NumeroCelular" class="form-control" required>

        </div>

        <div class="mb-3">

            <label for="NumeroTelefonico" class="form-label">Número Telefónico:</label>

            <input type="text" name="NumeroTelefonico" id="NumeroTelefonico" class="form-control" required>

        </div>

        <div class="mb-3">

            <label for="Perfil" class="form-label">Perfil:</label>
            
                <select name="Perfil" id="Perfil" class="form-select">              

                    <option value="0">Escoge una opción</option>

                    <option value="1">Administrador</option>

                    <option value="2">Empleado</option>

                    <option value="3">Cliente</option>

                </select>

        </div>

        <div class="mb-3">

            <label for="Usuario" class="form-label">Usuario:</label>

            <input type="text" name="Usuario" id="Usuario" class="form-control" required>

        </div>

        <div class="mb-3">

            <label for="Contraseña" class="form-label">Contraseña:</label>

            <input type="text" name="Password" id="Password" class="form-control" required>

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

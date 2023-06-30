<!-- Modal -->
<div class="modal fade" id="eliminaModal" tabindex="-1" aria-labelledby="eliminaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="eliminaModalLabel">Aviso</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ¿Desea eliminar producto?
            </div>

            <div class="modal-footer">
                <form action="./PHP/Eliminar(Producto).php" method="post">

                    <input type="hidden" name="id" id="id">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                    <button type="submit" class="btn btn-danger">Si</button>
                </form>
            </div>

        </div>
    </div>
</div>
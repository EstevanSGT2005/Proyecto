<?php
require 'Basedatos.php';

$sql = "SELECT Producto.idProducto, Producto.NombreProducto, Catalogo.Catalogo, Subcatalogo.Subcatalogo, Marca.Marca, Producto.PrecioAntes, Producto.PrecioActual, PorcentajeDescuento.PorcentajeDescuento, Producto.CantidadDisponible, Producto.Descripcion
FROM Producto
JOIN Catalogo ON Producto.Catalogo = Catalogo.idCatalogo
JOIN Subcatalogo ON Producto.Subcatalogo = Subcatalogo.idSubcatalogo
JOIN Marca ON Producto.Marca = Marca.idMarca
JOIN PorcentajeDescuento ON Producto.PorcentajeDescuento = PorcentajeDescuento.idPorcentajeDescuento;";
$resultado = $conexion->query($sql);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <!-- CSS (ESTILOS) -->
    <link rel="stylesheet" href="./CSS/Crud(Usuario).css">
    <link rel="stylesheet" href="./CSS/Css/color-1.css">
    <link rel="stylesheet" href="./CSS/root.css">
    <link rel="stylesheet" href="./CSS/selector-estilo.css">
    <!-- CSS (CAMBIAR DE COLOR) -->
    <link rel="stylesheet" href="./CSS/Css/color-1.css" class="alternativa-estilo" title="color-1" disabled>
    <link rel="stylesheet" href="./CSS/Css/color-2.css" class="alternativa-estilo" title="color-2" disabled>
    <link rel="stylesheet" href="./CSS/Css/color-3.css" class="alternativa-estilo" title="color-3" disabled>
    <link rel="stylesheet" href="./CSS/Css/color-4.css" class="alternativa-estilo" title="color-4" disabled>
    <link rel="stylesheet" href="./CSS/Css/color-5.css" class="alternativa-estilo" title="color-5" disabled>
    <link rel="stylesheet" href="./CSS/Css/color-6.css" class="alternativa-estilo" title="color-6" disabled>
    <link rel="stylesheet" href="./CSS/Css/color-7.css" class="alternativa-estilo" title="color-7" disabled>
    <link rel="stylesheet" href="./CSS/Css/color-8.css" class="alternativa-estilo" title="color-8" disabled>
    <link rel="stylesheet" href="./CSS/Css/color-9.css" class="alternativa-estilo" title="color-9" disabled>
    <link rel="stylesheet" href="./CSS/Css/color-10.css" class="alternativa-estilo" title="color-10" disabled>
    <!-- ICONOS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-straight/css/uicons-solid-straight.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css'>
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- CSS (Adicional) -->
    <link href="./CSS/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav>
        <div class="contenedor">
            <img src="./IMG/Logo.png" class="logo">
            <div class="busqueda">
                <input type="search" name="Busqueda" id="Busqueda" placeholder="Busqueda" maxlength="30">
            </div>
            <input type="submit" value="Buscar">

            <button class="toggle">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>
    </nav>
    <main>
        <aside>
            <div class="menu-contenedor">
                <div class="aside">
                    <ul class="nav">
                    <li><a href="./Dashboad.html"><i class="icon ion-ios-keypad"></i>Dashboard</a></li>
                        <li><a href=""><i class="icon ion-md-person"></i>Perfil</a></li>
                        <li><a href=""><i class="fa-solid fa-chart-simple"></i>Estadisticas</a></li>
                        <li><a href="./Crud(Usuario).php" ><i class="fa-solid fa-address-book"></i>Usuarios</a></li>
                        <li><a href="./Crud(Producto).php" class="active"><i class="fa-solid fa-boxes-stacked"></i>Productos</a></li>
                        <li><a href=""><i class="fa-solid fa-paste"></i>Reporte</a></li>
                        <li><a href="./Login.html"><i class="fa-solid fa-right-to-bracket fa-rotate-180"></i>Cerrar Sesión</a></li>
                    </ul>
                </div>
            </div>
        </aside>
<section>
  <div class="contenedor">
    <div class="contenedor-titulo">
      <h2 class="titul">Productos</h2>
    </div>

    <div class="rows">
      <div class="izquierda justify">
        <a href="#" class="" data-bs-toggle="modal" data-bs-target="#agregarModal">
          <i class="fa-solid fa-user-plus"></i> Agregar
        </a>
      </div>

  <div class="row">
  <table class="table">
    <thead>
      <tr class="tabla-titulo">
        <th>ID Producto</th>
        <th>Nombre</th>
        <th>Catalogo</th>
        <th>Subcatalogo</th>
        <th>Marca</th>
        <th>Cantidad Disponible</th>
        <th>Precio Antes</th>
        <th>Precio Actual</th>
        <th>Porcentaje Descuento</th>
        <th>Descripción</th>
        <th>Editar</th>
        <th>Eliminar</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($resultado as $row): ?>
        <tr>
          <td><?= $row['idProducto']; ?></td>
          <td><?= $row['NombreProducto']; ?></td>
          <td><?= $row['Catalogo']; ?></td>
          <td><?= $row['Subcatalogo']; ?></td>
          <td><?= $row['Marca']; ?></td>
          <td><?= $row['CantidadDisponible']; ?></td>
          <td><?= $row['PrecioAntes']; ?></td>
          <td><?= $row['PrecioActual']; ?></td>
          <td><?= $row['PorcentajeDescuento']; ?></td>
          <td><?= $row['Descripcion']; ?></td>
          <td>
            <a href="#" class="boton" data-bs-toggle="modal" data-bs-target="#editarModal" data-bs-id="<?= $row['idProducto']; ?>">
              <i class="fa-solid fa-pen-to-square"></i>
            </a>
          </td>
          <td>
            <a href="#" class="boton" data-bs-toggle="modal" data-bs-target="#eliminaModal" data-bs-id="<?= $row['idProducto']; ?>">
              <i class="fa-solid fa-trash"></i>
            </a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>

    </div>
  </div>
</section>

    </main>


    <!-- Estilos -->
    <div class="selector-estilo">
        <div class="selector-estilo-toggler s-icon">
            <i class="fas fa-cog fa-spin"></i>
        </div>
        <div class="claro-oscuro s-icon">
            <i class="fas"></i>
        </div>
        <h4>Temas de Colores</h4>
        <div class="colores">
            <span class="color-1" onclick="setActivaEstilo('color-1')"></span>
            <span class="color-2" onclick="setActivaEstilo('color-2')"></span>
            <span class="color-3" onclick="setActivaEstilo('color-3')"></span>
            <span class="color-4" onclick="setActivaEstilo('color-4')"></span>
            <span class="color-5" onclick="setActivaEstilo('color-5')"></span>
            <span class="color-6" onclick="setActivaEstilo('color-6')"></span>
            <span class="color-7" onclick="setActivaEstilo('color-7')"></span>
            <span class="color-8" onclick="setActivaEstilo('color-8')"></span>
            <span class="color-9" onclick="setActivaEstilo('color-9')"></span>
            <span class="color-10" onclick="setActivaEstilo('color-10')"></span>
        </div>
    </div>

    <?php
        $sqlCatalogo = "SELECT `idCatalogo`, `Catalogo` FROM `catalogo`";
        $Catalogo = $conexion->query($sqlCatalogo);

        $sqlSubcatalogo = "SELECT `idSubcatalogo`, `Subcatalogo` FROM `subcatalogo`";
        $Subcatalogo = $conexion->query($sqlSubcatalogo);

        $sqlMarca = "SELECT `idMarca`, `Marca` FROM `marca`";
        $Marca = $conexion->query($sqlMarca);

        $sqlPorcentajeDescuento = "SELECT `idPorcentajeDescuento`, `PorcentajeDescuento` FROM `porcentajedescuento`";
        $PorcentajeDescuento = $conexion->query($sqlPorcentajeDescuento);

        $Catalogo->data_seek(0);
        $Subcatalogo->data_seek(0);
        $Marca->data_seek(0);
        $PorcentajeDescuento->data_seek(0);

        include './PHP/Agregar(Producto)Modal.php';
        include './PHP/Editar(Producto)Modal.php';
        include './PHP/Eliminar(Producto)Modal.php';
    ?>

<!-- JS (Codigo) -->
<script>
    let editarModal = document.getElementById('editarModal');
    let eliminarModal = document.getElementById('eliminaModal');

    editarModal.addEventListener('shown.bs.modal', event => {
        let button = event.relatedTarget;
        let id = button.getAttribute('data-bs-id');

        let inputId = editarModal.querySelector('.modal-body #id');
        let inputNombreProducto = editarModal.querySelector('.modal-body #NombreProducto');
        let inputCantidadDisponible = editarModal.querySelector('.modal-body #CantidadDisponible');
        let inputPrecioAntes = editarModal.querySelector('.modal-body #PrecioAntes');
        let inputPrecioActual = editarModal.querySelector('.modal-body #PrecioActual');
        let inputDescripcion = editarModal.querySelector('.modal-body #Descripcion');

        let url = "./PHP/Identificar(Producto).php";
        let formData = new FormData();
        formData.append("id", id);

        fetch(url, {
            method: "POST",
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            inputId.value = data.idProducto;
            inputNombreProducto.value = data.NombreProducto;
            inputCantidadDisponible.value = data.CantidadDisponible;
            inputPrecioAntes.value = data.PrecioAntes;
            inputPrecioActual.value = data.PrecioActual;
            inputDescripcion.value = data.Descripcion;
        })
        .catch(err => console.log(err));
    });

    eliminarModal.addEventListener('shown.bs.modal', event => {
        let button = event.relatedTarget;
        let id = button.getAttribute('data-bs-id');
        eliminarModal.querySelector('.modal-footer #id').value = id;
    });
</script>

<script>
    const menuBTN = document.querySelector('.toggle');
    const sidebar = document.querySelector('aside');

    menuBTN.addEventListener('click', () => {
        if (sidebar.style.display === 'block') {
            sidebar.style.display = 'none';
        } else {
            sidebar.style.display = 'block';
        }
    });
</script>


    <!-- JS (Adicional) -->
    <script src="./JS/bootstrap.bundle.min.js"></script>
    <!-- JS -->
    <script src="./JS/Selectro-Estilo.js"></script>
    <!-- JS (ICONOS) -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>



    
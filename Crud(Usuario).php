<?php
require 'Basedatos.php';

$sql = "SELECT Usuario.idUsuario, Registro.PrimerNombre, Registro.SegundoNombre, Registro.PrimerApellido, Registro.SegundoApellido, Registro.TipoDocumento, Registro.NumeroDocumento, Registro.FechaNacimiento, Registro.Genero, Usuario.CorreoElectronico, Usuario.NumeroTelefonico, Usuario.NumeroCelular, Perfil.Perfil, Usuario.Usuario, Usuario.Contraseña, Usuario.Fecha
FROM Usuario
JOIN Registro ON Usuario.Registro = Registro.idRegistro
JOIN Perfil ON Usuario.Perfil = Perfil.idPerfil";
$resultado = $conexion->query($sql);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
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
                        <li><a href="./Crud(Usuario).php" class="active"><i class="fa-solid fa-address-book"></i>Usuarios</a></li>
                        <li><a href="./Crud(Producto).php"><i class="fa-solid fa-boxes-stacked"></i>Productos</a></li>
                        <li><a href=""><i class="fa-solid fa-paste"></i>Reporte</a></li>
                        <li><a href="./Login.html"><i class="fa-solid fa-right-to-bracket fa-rotate-180"></i>Cerrar Sesión</a></li>
                    </ul>
                </div>
            </div>
        </aside>
        <section>
            <div class="contenedor">

                <div class="contenedor-titulo">

                    <h2 class="titul">Usuarios</h2>

                </div>

                
                <div class="rows">

                    <div class="izquierda justify">
                        <a href="" class="" data-bs-toggle="modal" data-bs-target="#agregarModal"><i class="fa-solid fa-user-plus"></i> Nuevo Usuario</a>
                    </div>
                    
                    <div class="row">
                    <table class="table">
                        <thead>
                            <tr class="tabla-titulo">
                                <th>Numero Documento</th>
                                <th>Usuario</th>
                                <th>Contraseña</th>
                                <th>Perfil</th>
                                <th>Primer Nombre</th>
                                <th>Primer Apellido</th>
                                <th>Correo Electrónico</th>
                                <th>Número Celular</th>
                                <th>Número Telefonico</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php while ($row = $resultado->fetch_assoc()) { ?>
                            <tr>
                                <td><?php echo $row['NumeroDocumento']; ?></td>
                                <td><?php echo $row['Usuario']; ?></td>
                                <td><?php echo $row['Contraseña']; ?></td>
                                <td><?php echo $row['Perfil']; ?></td>
                                <td><?php echo $row['PrimerNombre']; ?></td>
                                <td><?php echo $row['PrimerApellido']; ?></td>
                                <td><?php echo $row['CorreoElectronico']; ?></td>
                                <td><?php echo $row['NumeroCelular']; ?></td>
                                <td><?php echo $row['NumeroTelefonico']; ?></td>
                                <td><a href="#" class="boton" data-bs-toggle="modal" data-bs-target="#editarModal"  data-bs-id="<?= $row['idUsuario']; ?>"><i class="fa-solid fa-pen-to-square"></i></a></td>
                                <td><a href="#" class="boton "  data-bs-toggle="modal" data-bs-target="#eliminaModal"  data-bs-id="<?= $row['idUsuario']; ?>"><i class="fa-solid fa-trash"></i></a></td>
                            </tr>
                            <?php }?>
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


    <?php include './PHP/Agregar(Usuario)Modal.php'; ?>

    <?php include './PHP/Editar(Usuario)Modal.php'; ?>

    <?php include './PHP/Eliminar(Usuario)Modal.php'; ?>

    <!-- JS (Codigo) -->

    <script>
     
     let editarModal = document.getElementById('editarModal');
     let eliminarModal = document.getElementById('eliminaModal');

         editarModal.addEventListener('shown.bs.modal', event => {
         let button = event.relatedTarget;
         let id = button.getAttribute('data-bs-id');

         let inputId = editarModal.querySelector('.modal-body #id');
         let inputPrimerNombre = editarModal.querySelector('.modal-body #PrimerNombre');
         let inputSegundoNombre = editarModal.querySelector('.modal-body #SegundoNombre');
         let inputPrimerApellido = editarModal.querySelector('.modal-body #PrimerApellido');
         let inputSegundoApellido = editarModal.querySelector('.modal-body #SegundoApellido');
         let inputTipoDocumento = editarModal.querySelector('.modal-body #TipoDocumento');
         let inputNumeroDocumento = editarModal.querySelector('.modal-body #NumeroDocumento');
         let inputFechaNacimiento = editarModal.querySelector('.modal-body #FechaNacimiento');
         let inputGenero = editarModal.querySelector('.modal-body #Genero');
         let inputCorreoElectronico = editarModal.querySelector('.modal-body #CorreoElectronico');
         let inputNumeroCelular = editarModal.querySelector('.modal-body #NumeroCelular');
         let inputNumeroTelefonico = editarModal.querySelector('.modal-body #NumeroTelefonico');
         let inputPerfil = editarModal.querySelector('.modal-body #Perfil');
         let inputUsuario = editarModal.querySelector('.modal-body #Usuario');
         let inputContraseña = editarModal.querySelector('.modal-body #Password');

         let url = "./PHP/Identificar(Usuario).php";
         let formData = new FormData();
         formData.append("id", id);
         
         fetch(url, {
             method: "POST",
             body: formData
         }).then(response => response.json())
           .then(data => {
               inputId.value = data.idUsuario;
               inputPrimerNombre.value = data.PrimerNombre;
               inputSegundoNombre.value = data.SegundoNombre;
               inputPrimerApellido.value = data.PrimerApellido;
               inputSegundoApellido.value = data.SegundoApellido;
               inputTipoDocumento.value = data.TipoDocumento;
               inputNumeroDocumento.value = data.NumeroDocumento;
               inputFechaNacimiento.value = data.FechaNacimiento;
               inputGenero.value = data.Genero;
               inputCorreoElectronico.value = data.CorreoElectronico;
               inputNumeroCelular.value = data.NumeroCelular;
               inputNumeroTelefonico.value = data.NumeroTelefonico;
               inputPerfil.value = data.Perfil;
               inputUsuario.value = data.Usuario;
               inputContraseña.value = data.Contraseña;
           })
           .catch(err => console.log(err));
     });

         eliminarModal.addEventListener('shown.bs.modal', event => {
         let button = event.relatedTarget
         let id = button.getAttribute('data-bs-id')
         eliminarModal.querySelector('.modal-footer #id').value = id
     });

 </script>

 <script>

    const menuBTN = document.querySelector('.toggle');
    const sidebar = document.querySelector('aside');

    menuBTN.addEventListener('click', () => 
    {
        if (sidebar.style.display === 'block') 
        {
            sidebar.style.display = 'none';
        } 

        else 
        {
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



    
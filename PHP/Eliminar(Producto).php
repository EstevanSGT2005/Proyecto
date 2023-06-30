<?php

    require '../Basedatos.php';

    $id = $conexion->real_escape_string($_POST['id']);


    $consulta1 = "DELETE FROM producto WHERE  `idProducto` = '$id'";

    $resultado1 = $conexion->query($consulta1);


    header('Location: ../Crud(Producto).php');
    exit;

?>

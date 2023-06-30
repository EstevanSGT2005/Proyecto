<?php
require '../Basedatos.php';


$id = $conexion->real_escape_string($_POST['id']);


$consulta1 = "DELETE FROM `registro` WHERE `idRegistro` = '$id'";
$consulta2 = "DELETE FROM `usuario` WHERE `idUsuario` = '$id'";


$resultado1 = $conexion->query($consulta1);
$resultado2 = $conexion->query($consulta2);


    header('Location: ../Crud(Usuario).php');
    exit;

?>

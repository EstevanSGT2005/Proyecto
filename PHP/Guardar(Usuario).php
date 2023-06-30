<?php
require '../Basedatos.php';

$PrimerNombre = $conexion->real_escape_string($_POST['PrimerNombre']);
$SegundoNombre = $conexion->real_escape_string($_POST['SegundoNombre']);
$PrimerApellido = $conexion->real_escape_string($_POST['PrimerApellido']);
$SegundoApellido = $conexion->real_escape_string($_POST['SegundoApellido']);
$TipoDocumento = $conexion->real_escape_string($_POST['TipoDocumento']);
$NumeroDocumento = $conexion->real_escape_string($_POST['NumeroDocumento']);
$FechaNacimiento = $conexion->real_escape_string($_POST['FechaNacimiento']);
$Genero = $conexion->real_escape_string($_POST['Genero']);
$CorreElectronico = $conexion->real_escape_string($_POST['CorreElectronico']);
$NumeroCelular = $conexion->real_escape_string($_POST['NumeroCelular']);
$NumeroTelefonico = $conexion->real_escape_string($_POST['NumeroTelefonico']);
$Perfil = $conexion->real_escape_string($_POST['Perfil']);
$Usuario = $conexion->real_escape_string($_POST['Usuario']);
$Password = $conexion->real_escape_string($_POST['Password']);

$consulta = "INSERT INTO `registro`(`PrimerNombre`, `SegundoNombre`, `PrimerApellido`, `SegundoApellido`, `TipoDocumento`, `NumeroDocumento`, `FechaNacimiento`, `Genero`) 
             VALUES ('$PrimerNombre','$SegundoNombre','$PrimerApellido','$SegundoApellido','$TipoDocumento','$NumeroDocumento','$FechaNacimiento','$Genero');";

$resultado1 = mysqli_query($conexion, $consulta);
if ($resultado1) 
{
    $idRegistro = mysqli_insert_id($conexion);

    $consulta2 = "INSERT INTO `usuario`(`Registro`, `Perfil`, `Usuario`, `Contraseña`, `CorreoElectronico`, `NumeroCelular`, `NumeroTelefonico`, `Fecha`) 
                  VALUES ('$idRegistro','$Perfil','$Usuario','$Password','$CorreElectronico','$NumeroCelular','$NumeroTelefonico',NOW());";


    $resultado2 = mysqli_query($conexion, $consulta2);

} 

header('Location: ../Crud(Usuario).php');
?>

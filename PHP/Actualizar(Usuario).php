<?php
require '../Basedatos.php';

$id = $conexion->real_escape_string($_POST['id']);
$PrimerNombre = $conexion->real_escape_string($_POST['PrimerNombre']);
$SegundoNombre = $conexion->real_escape_string($_POST['SegundoNombre']);
$PrimerApellido = $conexion->real_escape_string($_POST['PrimerApellido']);
$SegundoApellido = $conexion->real_escape_string($_POST['SegundoApellido']);
$TipoDocumento = $conexion->real_escape_string($_POST['TipoDocumento']);
$NumeroDocumento = $conexion->real_escape_string($_POST['NumeroDocumento']);
$FechaNacimiento = $conexion->real_escape_string($_POST['FechaNacimiento']);
$Genero = $conexion->real_escape_string($_POST['Genero']);
$CorreElectronico = $conexion->real_escape_string($_POST['CorreoElectronico']);
$NumeroCelular = $conexion->real_escape_string($_POST['NumeroCelular']);
$NumeroTelefonico = $conexion->real_escape_string($_POST['NumeroTelefonico']);
$Perfil = $conexion->real_escape_string($_POST['Perfil']);
$Usuario = $conexion->real_escape_string($_POST['Usuario']);
$Password = $conexion->real_escape_string($_POST['Password']);

$consulta = "UPDATE `registro` SET `PrimerNombre` = '$PrimerNombre', `SegundoNombre` = '$SegundoNombre', `PrimerApellido` = '$PrimerApellido', `SegundoApellido` = '$SegundoApellido', `TipoDocumento` = '$TipoDocumento', `NumeroDocumento` = '$NumeroDocumento', `FechaNacimiento` = '$FechaNacimiento', `Genero` = '$Genero' WHERE `idRegistro` = '$id'";

$resultado1 = mysqli_query($conexion, $consulta);

if ($resultado1) 
{
    $consulta2 = "UPDATE `usuario` SET `Perfil` = '$Perfil', `Usuario` = '$Usuario', `Contraseña` = '$Password', `CorreoElectronico` = '$CorreElectronico', `NumeroCelular` = '$NumeroCelular', `NumeroTelefonico` = '$NumeroTelefonico' WHERE `idUsuario` = '$id'";
    $resultado2 = mysqli_query($conexion, $consulta2);
    header('Location: ../Crud(Usuario).php');
}

else 
{
    echo "Error al actualizar el producto";
}


?>

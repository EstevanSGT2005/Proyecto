<?php
require '../Basedatos.php';

$id = $conexion->real_escape_string( $_POST['id']);
$NombreProducto = $conexion->real_escape_string( $_POST['NombreProducto']);
$CantidadDisponible = $conexion->real_escape_string( $_POST['CantidadDisponible']);
$PrecioAntes = $conexion->real_escape_string( $_POST['PrecioAntes']);
$PrecioActual = $conexion->real_escape_string( $_POST['PrecioActual']);
$Descripcion = $conexion->real_escape_string( $_POST['Descripcion']);

$consulta = "UPDATE `producto` SET `NombreProducto`='$NombreProducto',`CantidadDisponible`='$CantidadDisponible', `PrecioAntes`='$PrecioAntes', `PrecioActual`='$PrecioActual',  `Descripcion`='$Descripcion' WHERE `idProducto` = '$id' ";

$resultado = mysqli_query($conexion,$consulta);

if ($resultado) 
{
    header('Location: ../Crud(Producto).php');
} 

else 
{
    echo "Error al actualizar el producto";
}
?>

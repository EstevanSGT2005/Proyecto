<?php
require '../Basedatos.php';

$NombreProducto = $conexion->real_escape_string($_POST['NombreProducto']);
$Catalogo = $conexion->real_escape_string($_POST['Catalogo']);
$Subcatalogo = $conexion->real_escape_string($_POST['Subcatalogo']);
$Marca = $conexion->real_escape_string($_POST['Marca']);
$CantidadDisponible = $conexion->real_escape_string($_POST['CantidadDisponible']);
$PrecioAntes = $conexion->real_escape_string($_POST['PrecioAntes']);
$PrecioActual = $conexion->real_escape_string($_POST['PrecioActual']);
$PorcentajeDescuento = $conexion->real_escape_string($_POST['PorcentajeDescuento']);
$Descripcion = $conexion->real_escape_string($_POST['Descripcion']);

$consulta = "INSERT INTO `producto`( `NombreProducto`, `Catalogo`, `Subcatalogo`, `Marca`, `CantidadDisponible`, `PrecioAntes`, `PrecioActual`, `PorcentajeDescuento`, `Descripcion`) 
                            VALUES ('$NombreProducto','$Catalogo','$Subcatalogo','$Marca','$CantidadDisponible','$PrecioAntes', '$PrecioActual','$PorcentajeDescuento','$Descripcion');";

$resultado1 = mysqli_query($conexion, $consulta);


header('Location: ../Crud(Producto).php');
?>

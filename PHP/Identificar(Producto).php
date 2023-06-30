<?php
require '../Basedatos.php';

$id = $conexion->real_escape_string($_POST['id']);

$consulta = "SELECT `NombreProducto`, `CantidadDisponible`, `PrecioAntes`, `PrecioActual`, `Descripcion` FROM `producto` WHERE `idProducto` = '$id' LIMIT 1";

$resultado = $conexion->query($consulta);

if ($resultado && $resultado->num_rows > 0) {
    $row1 = $resultado->fetch_assoc();
    echo json_encode($row1, JSON_UNESCAPED_UNICODE);
} else {
    echo json_encode(null);
}
?>

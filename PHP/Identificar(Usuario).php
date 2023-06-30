<?php
require '../Basedatos.php';

$id = $conexion->real_escape_string($_POST['id']);

$consulta = "SELECT `idRegistro`, `PrimerNombre`, `SegundoNombre`, `PrimerApellido`, `SegundoApellido`, `TipoDocumento`, `NumeroDocumento`, `FechaNacimiento`, `Genero` FROM `registro` WHERE `idRegistro` = '$id' LIMIT 1";
$consulta2 = "SELECT `idUsuario`, `Registro`, `Perfil`, `Usuario`, `Contraseña`, `CorreoElectronico`, `NumeroCelular`, `NumeroTelefonico`, `Fecha` FROM `usuario` WHERE `idUsuario` = '$id' LIMIT 1";

$resultado1 = mysqli_query($conexion, $consulta);
$resultado2 = mysqli_query($conexion, $consulta2);

if ($resultado1 && $resultado2) 
{
    $row1 = mysqli_fetch_assoc($resultado1);
    $row2 = mysqli_fetch_assoc($resultado2);

    if ($row1 && $row2) 
    {
        $registro = array_merge($row1, $row2);
        echo json_encode($registro, JSON_UNESCAPED_UNICODE);
    } 

    else {

        echo json_encode(null);
    }
} 

else 
{
    echo json_encode(null);
}
?>

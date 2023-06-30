<?php
$PrimerNombre = $_POST['PrimerNombre'];
$SegundoNombre = $_POST['SegundoNombre'];
$PrimerApellido = $_POST['PrimerApellido'];
$SegundoApellido = $_POST['SegundoApellido'];
$TipoDocumento = $_POST['TipoDocumento'];
$NumeroDocumento = $_POST['NumeroDocumento'];
$FechaNacimiento = $_POST['FechaNacimiento'];
$Genero = $_POST['Genero'];
$CorreoElectronico = $_POST['CorreoElectronico'];
$NumeroCelular = $_POST['NumeroCelular'];
$NumeroTelefonico = $_POST['NumeroTelefonico'];
$Usuario = $_POST['Usuario'];
$password = $_POST['password'];

$conexion = mysqli_connect('localhost', 'root', '1234', 'basedatos');


if (!$conexion) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}

$consulta = "INSERT INTO `registro` (`PrimerNombre`, `SegundoNombre`, `PrimerApellido`, `SegundoApellido`, `TipoDocumento`, `NumeroDocumento`, `FechaNacimiento`, `Genero`) 
             VALUES ('$PrimerNombre', '$SegundoNombre', '$PrimerApellido', '$SegundoApellido', '$TipoDocumento', '$NumeroDocumento', '$FechaNacimiento', '$Genero')";

$resultado1 = mysqli_query($conexion, $consulta);

if ($resultado1) {
    $idRegistro = mysqli_insert_id($conexion);

    $consulta2 = "INSERT INTO `usuario` (`Registro`, `Perfil`, `Usuario`, `Contraseña`, `CorreoElectronico`, `NumeroCelular`, `NumeroTelefonico`) 
                  VALUES ('$idRegistro', '3', '$Usuario', '$password', '$CorreoElectronico', '$NumeroCelular', '$NumeroTelefonico')";

    $resultado2 = mysqli_query($conexion, $consulta2);

    if ($resultado2) {
        echo "<script>alert('Tu registro  fue exito. Te damos la bienvenida a SOP'); location.href='Login.html'</script>";
    } else {
        echo "<script>alert('Error al almacenar datos en la tabla usuario'); location.href='Registro.html'</script>";
    }
} else {
    echo "<script>alert('Error al almacenar datos en la tabla registro'); location.href='Registro.html'</script>";
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>

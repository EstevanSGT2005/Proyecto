<?php
$Usuario = $_POST['usuario'];
$Clave = $_POST['password'];

$conexion = mysqli_connect('localhost', 'root', '1234', 'basedatos');
$consulta = "SELECT Perfil FROM usuario WHERE Usuario = '$Usuario' AND Contraseña = '$Clave';";
$resultado = mysqli_query($conexion, $consulta);
$fila = mysqli_fetch_assoc($resultado);

if ($fila) 
{
    $perfil = $fila['Perfil'];

    switch ($perfil) 
    {

        case 1:
            echo "<script>alert('Administrador'); location.href='Dashboad.html';</script>";
            break;

        case 2:
            echo "<script>alert('Empleado'); location.href='';</script>";
            break;

        case 3:
            echo "<script>alert('Cliente'); location.href='Categoria.html';</script>";
            break;

        default:
            echo "<script>alert('Perfil de usuario no reconocido');location.href='Login.html'; </script>";
            break;
    }
} 

else 

{
    echo "<script>alert('Usuario o contraseña incorrectos');location.href='Login.html';</script>";
}
?>

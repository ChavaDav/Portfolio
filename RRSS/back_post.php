<?php
session_start();

$servername = "localhost";
$usuario = "root";
$contraseña = "";
$bd = "prueba";

// Creamos la conexión
$conexion = new mysqli($servername, $usuario, $contraseña, $bd);

// Comprobamos la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
} 

$nombreUsuario = mysqli_real_escape_string($conexion, $_SESSION['usuario']);
$texto = mysqli_real_escape_string($conexion, $_GET['texto']);

    $consulta = "INSERT INTO textos (usuarios, texto) VALUES ('$nombreUsuario', '$texto')";
    if ($conexion->query($consulta) === TRUE) {
        echo "<script>window.alert('Post guardado');</script>";
    header("Refresh:0; url=Bienvenida.php");
    } else {
        echo "Error de SQL: " . $consulta . "<br>" . $conexion->error;
    }
$conexion->close();
?>